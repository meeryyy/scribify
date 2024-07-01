<?php

namespace Tests\Feature;

use App\Models\Histoire;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HistoireTest extends TestCase
{
    use DatabaseTransactions; // Utilisation de transactions de base de données pour réinitialiser l'état de la base de données après chaque test

    /** @test */
    public function it_displays_a_list_of_histories_for_authenticated_user()
    {
        // Crée un utilisateur et des histoires liées à cet utilisateur pour le test
        $user = User::factory()->create();
        $histoires = Histoire::factory()->count(3)->create(['user_id' => $user->id]);

        // Simule l'authentification de cet utilisateur
        $this->actingAs($user);

        // Appelle la méthode index du contrôleur
        $response = $this->get(route('histoire.index'));

        // Vérifie que la réponse contient les histoires de l'utilisateur authentifié
        $response->assertStatus(200);
        foreach ($histoires as $histoire) {
            $response->assertSee($histoire->title);
        }
    }

    // Vous pouvez écrire des tests similaires pour les autres méthodes du contrôleur, par exemple create, store, show, etc.
}
