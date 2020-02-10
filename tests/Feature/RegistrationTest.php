<?php
## integration test ##
namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use WithFaker;
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        Mail::fake();
        $name = 'Test User';

        $this->post('/register', [
            'name' => $name,
            'email' => $this->faker()->email,
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ]);

        $this->assertDatabaseHas('users', [
            'name' => $name
        ]);

        Mail::assertSent(RegistrationMail::class);
    }
}
