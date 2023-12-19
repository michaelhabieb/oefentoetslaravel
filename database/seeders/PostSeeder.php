<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post(); // 1
$post->subject = 'Favoriete boek van het jaar';
$post->content = 'Hallo boekenwurmen! Wat is jullie favoriete boek van het afgelopen jaar en waarom? Laat het weten, ik ben op zoek naar nieuwe leestips!';

$post->save();

$post = new Post(); // 2
$post->subject = 'Gaming setup delen';
$post->content = 'Gamers, verenig u! Deel een foto van je gaming setup en vertel ons over je favoriete games op dit moment. Laten we praten over de ultieme game-ervaring!';

$post->save();

$post = new Post(); // 3
$post->subject = 'Tuinieren tips';
$post->content = 'Groene duimen, verenigt u! Heb je handige tips voor tuinieren? Deel ze hier, of stel je vragen over het kweken van planten, bloemen, of groenten. Samen maken we groene paradijzen!';

$post->save();

$post = new Post(); // 4
$post->subject = 'Film aanraders gezocht';
$post->content = 'Hé filmfanaten! Ik ben op zoek naar nieuwe films om te bekijken. Wat is de laatste film die je hebt gezien en aan iedereen zou aanraden? Deel je aanraders hier!';

$post->save();

$post = new Post(); // 5
$post->subject = 'Fitnessmotivatie';
$post->content = 'Fitnessfreaks, laten we elkaar motiveren! Deel je favoriete workouts, gezonde recepten, of persoonlijke fitnessdoelen. Samen werken we aan een gezondere levensstijl!';

$post->save();

$post = new Post(); // 6
$post->subject = 'Creatieve schrijvers gezocht';
$post->content = 'Schrijfliefhebbers, verenigt u! Deel hier je creatieve schrijfprojecten, gedichten, of verhalen. Laat ons genieten van jullie literaire talenten!';

$post->save();

$post = new Post(); // 7
$post->subject = 'Technologie trends';
$post->content = 'Tech-enthousiastelingen, laten we praten over de nieuwste technologische trends! Welke gadgets zijn hot op dit moment? Deel je gedachten en ontdek nieuwe innovaties!';

$post->save();

$post = new Post(); // 8
$post->subject = 'Gekke huisdierenverhalen';
$post->content = 'Dierenliefhebbers, toon je trots! Deel hier grappige of gekke verhalen over je huisdieren en vertel leuke anekdotes over hun streken. Laten we samen lachen om de capriolen van onze harige vrienden!';
$post->save();

$post = new Post(); // 9
$post->subject = 'Muziek ontdekkingen';
$post->content = 'Muziekliefhebbers, deel je recente muziekontdekkingen! Of het nu een nieuw album, een opkomende band, of een verborgen juweeltje is, deel het hier met de community!';

$post->save();

$post = new Post(); // 10
$post->subject = 'Wetenschappelijke vraagbaak';
$post->content = 'Wetenschapsgekken, verenigt u! Heb je vragen over wetenschap, technologie, of natuur? Stel ze hier en laten we samen op zoek gaan naar antwoorden en inzichten!';

$post->save();
    }
}
