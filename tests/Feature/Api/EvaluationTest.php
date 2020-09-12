<?php

namespace Tests\Feature\Api;

use App\Models\Client;
use App\Models\Order;
use Illuminate\Support\Str;
use Tests\TestCase;

class EvaluationTest extends TestCase
{
    /**
     * Error create new evaluation
     *
     * @return void
     */
    public function testCreateNewEvaluationError()
    {
        $order = 'fake_value';

        $response = $this->postJson("/api/auth/v1/orders/{$order}/evaluations");

        $response->assertStatus(401);
    }

    /**
     * create new evaluation
     *
     * @return void
     */
    public function testCreateNewEvaluation()
    {



        $client = factory(Client::class)->create();
        $token = $client->createToken(Str::random(10))->plainTextToken;

        $order = $client->orders()->save(factory(Order::class)->make());

        $payload = [
            'stars' => 5,
            'comment' => Str::random(10),
        ];

        $headers = [
            'Authorization' => "Bearer {$token}",
        ];

        $response = $this->postJson(
            "api/auth/v1/orders/{$order->identify}/evaluations",
            $payload,
            $headers
        );

        $response->dump();

        $response->assertStatus(201);

    }
}