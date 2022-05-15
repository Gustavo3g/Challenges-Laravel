<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Resolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResolutionController extends Controller
{
    public function index($id)
    {

        $challenge = DB::table('challenges')
            ->where('challenges.id', '=', $id)
            ->join('resolutions', 'challenges.id', '=', 'resolutions.challenge_id')
            ->first();

        if ($challenge) {
            return view('resolution.resolution', ['challenge' => $challenge]);
        } else {
            $challenge = Challenge::find($id);
            return view('resolution.resolution', ['challenge' => $challenge]);
        }


    }

    public function auto()
    {
        $questions = [
            [
                'title' => 'Chico e Juca',
                'description' => 'Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.',
                'status' => 'pending'
            ],
            [
                'title' => 'Biblioteca',
                'description' => 'A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado,otipo de usuário (professor ou aluno),o algoritmo deve imprimir um recibo mostrando o nome do livro,otipo de usuário por extenso e o total de dias de empréstimo. Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias.',
                'status' => 'pending'
            ],
            [
                'title' => 'Algoritimo 1',
                'description' => 'Criar um algoritmo que gere uma matriz 5x5 e imprima: toda a matriz,a matriz gerada apenas com os números ímpar e se outra só com os números pares.',
                'status' => 'pending'
            ],
            [
                'title' => 'Algoritimo 2',
                'description' => 'Criar um algoritmo com um campo que possa receber apenas números e vírgulas, separe os valores enviados e valide aqueles que são um número válido da Sequência de Fibonaccieimprima os números de forma crescente, conforme o exemplo:',
                'status' => 'pending'
            ]];

        foreach ($questions as $question) {

            Challenge::create([
                'title' => $question['title'],
                'description' => $question['description'],
                'status' => $question['status'],
                'path_image' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAclBMVEUsND////8pMT06QUvs7e4GFycGFykdJzUMGioUHy7m5+jFyMkXIjG3ubz3+PnOz9CbnaA0PEaprK+Gio4jLDhUWWDW19h0eX8aJTJOVFxscHbd3uC5u74sNEELGinNztBDSFGjpqqQlJgAABsAECJfZGrsflOaAAADNUlEQVR4nO3d0XKiMABAUUQU6KK2mCqKoW7X/v8vLqE6iuKaYZsmoffO2AfHSs9EpcSgQUBERERERERERERERERERERERESDTdaXsKimNppMq0xI88ZwsslXkZ3K2XZi2iiL/Wpks2ibmBWma6s+VW6SKGP7wNFoNjUnDPe2dU3L2JhwYvc5eGpuTBhubNuOvZsiFrlt2rHS1ItN5caDtK4yJJxEtmWnxiFChAhthxAhQvshRIjQfggRIrSfi8L8WbPfcz+Fr0msWaozY+me8Omg/27DVGM2yEFh0rxp9TC1lcRPYSXVO3Pqh6K2LvJ8aa7wVFiPYfbr8e3K1GdhqiNMECJEiBAhQoQI3RVG1eCEu9lluzyWQfzevrKj3XPsi3CTZJcVzdqJOHtYfTvphXB16L0N6ccYLtL+Gwn/aGzFDaEQ58kXoX5d3J+cuaiYaWzACWFazs+VqToCnuuktQEnhMnTxRX1/lDq7C10c0Eor4Va+0OfhDdjiBAhQoQIESJEiBChfaHmTJRXwupnCSP1KH0bmFCsl+fWQgZiu+yo34lG1oVvtVCKWJyKhVqHILqa9jqj0bpwce+8pMtFGMdSvZkZx4TRQVwtlJGd62nUnRZeCkeLzUu7+i8KX26r7zTzU3hd81q6uLl6lw1GeGd/OBuQsPu/NoQIESJEiBBhLSwGI4ySoOsI2OcxnOWtnuP6CHiZX6cOjD0V7pOiVbOeRhTXqQUMfgpXN58CJO+eUeKnUM3TtEl3gWLcA+iGMGitklHErvU02b70VSgr5rwHJhz+GCJEiBAhQoQIESJEiPA7hIM/empmE4ckVKtNxHZ9bisGNoZvn+c9XRQMbAw719MMSjifXq+nCUNx6DMx6qpwtPp4ve7jKz9I2r7QdAgRIrQfQoQI7YcQIUL7IUSI0H6mhEmv1T0mKswAA62P//mOookhodjaph3LM0NCZ56Ihp6G0plBzP/jo8T+TZQyceHb80pTwKbE/otNGRraVXwmk+UXTl33KU+NAgO1MPbd3m4xysdGH6LB52rmOKnGdiqmmekBPPX4OwCM9E06IiIiIiIiIiIiIiIiIiIiIiIid/sL3nmcNpb/nlwAAAAASUVORK5CYII='
            ]);
        }

        return redirect()->route('challenges.index')->with(['success' => 'Criado com sucesso']);

    }

    public function done(Request $request, $id)
    {


        if (empty($request->get('resolution'))) {
            return redirect()->route('challenges.index');
        }

        Challenge::find($id)
            ->update([
                'status' => $request->get('status')
            ]);

        Resolution::create([
            'resolution' => $request->get('resolution'),
            'challenge_id' => $id,
        ]);

        return redirect()->route('challenges.index');


    }
}
