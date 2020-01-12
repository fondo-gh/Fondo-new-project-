<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Startup;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;

class InvestorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:investor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $startups = Startup::all();
        return view('investor.pages.dashboard')->withStartups($startups);
    }

    /**
     * Returns page to display the details of the startup
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @return mixed
     */
    public function getStartupShowPage($id)
    {
        $startup = Startup::find($id);
        return view('investor.pages.startup_show')->withStartup($startup);
    }

    /**
     * Invest in startup. Store notification
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function startupInvest(Request $request, $id)
    {
        Notification::create(
            [
                'admin_id' => auth()->user()->id,
                'startup_id' => $id,
                'user_id' => Startup::find($id)->user->id
            ]
        );

        session()->flash("success", "Your request has been successfully. You will be contacted by Fondo shortly.");
        return back();
    }

    /**
     * @param Request $request
     */
    public function getPrediction(Request $request)
    {
        //get the startup id
        $startupId = $request['id'];
        //get the startup
        $startup = Startup::find($startupId);

        //endpoint
        $endpoint = "https://ussouthcentral.services.azureml.net/workspaces/dfd5114aadc74affb113e74728aa3b0f/services/db4898c420bf40419b0ca129c0284eb5/execute?api-version=2.0&format=swagger";
        //body of the request
        $body = [
            "Inputs" => [
                "input1" => [
                    [
                        "R&D Spend" => $startup->research_cost,
                        "Administration" => $startup->administration_cost,
                        "Marketing Spend" => $startup->marketing_cost,
                        "Profit" => $startup->profit
                    ]
                ]
            ]
        ];

        //json  body
        $jsonBody = Collect($body)->toJson();

        //header and body for request
        $headerAndBody = [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => "Bearer 76dNq2NOBqVcYVrVXTezvsTW6ITWpZ6WZe3MLFQmvkDYg5lzJ0BwwzBknCnyXHutsmcf8xmX0AX2Eo38QLYN0g==",
            ],
            'body' => $jsonBody
        ];
        //client for api call
        $client = new Client();
        $promise = $client->postAsync($endpoint, $headerAndBody)->then(
        //success response
            function (ResponseInterface $response) {
                //get result as an associative array
                $result = json_decode($response->getBody(), true);
                echo json_encode(['status' => "success", 'data' => $result]);
            },

            //error response
            function (RequestException $e) {
                echo json_encode(['status' => "error", 'message' => $e->getMessage(), 'code'=> $e->getCode()]);
            });
        //await the async call
        $promise->wait();
    }
}
