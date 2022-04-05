<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PinsController extends Controller
{
    public function index()
    {
        $this->generatePinNumber();

        return $this->generatePinNumber();
    }

    public function generatePinNumber()
    {
        $pin = [];
        for ($i = 0; $i < 100; $i++) {
            $value = mt_rand(1, 9);
            if (!in_array($value, $pin)) {
                if (end($pin) + 1 != $value) {
                    if (end($pin) - 1 != $value) {
                        if (!$this->pinExists(implode("", $pin))) {
                            $pin[] = $value;
                        }
                    }
                }

                if (count($pin) == 4) {
                    break;
                }
            }
        }
        User::create([
            'pin' => implode("", $pin),
        ]);
        return response()->json(['item' => implode("", $pin)]);

    }

    function pinExists($number)
    {
        return User::where('pin', $number)->exists();
    }

}
