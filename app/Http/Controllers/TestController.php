<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testRelations(Request $request)
    {
        // Récupérer tous les utilisateurs avec leur rôle associé
        $users = User::with('role')->get();

        // Préparer un tableau pour stocker les données utilisateur avec leur rôle
        $usersWithRoles = $users->map(function ($user) {
            // Vérifier si l'utilisateur a un rôle associé
            $roleName = $user->role ? $user->role->RolesNom : 'Pas de rôle';
            return [
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_role' => $roleName,
            ];
        });

        // Retourner les résultats en JSON
        return response()->json(['users_with_roles' => $usersWithRoles]);
    }

}

