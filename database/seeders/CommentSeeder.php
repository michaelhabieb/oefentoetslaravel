<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     //voeg 1 - 5 comments per post toe met passende antwoorden op de forum post = chatgpt prompt //
    public function run(): void
    {
        // Comments op post 1
$comment = new Comment(); // 1 op post 1
$comment->content = 'Historische fictie is geweldig! Mijn favoriet was "De Nachtraven". Iemand anders die dat boek heeft gelezen?';
$comment->user_id = 10;
$comment->post_id = 1;
$comment->save();

$comment = new Comment(); // 2 op post 1
$comment->content = 'Ja, "De Nachtraven" was een meeslepend verhaal. Ik heb er echt van genoten!';
$comment->user_id = 6;
$comment->post_id = 1;
$comment->save();

$comment = new Comment(); // 3 op post 1
$comment->content = 'Ik ben meer van de non-fictie. Heeft iemand goede aanbevelingen voor informatieve boeken?';
$comment->user_id = 9;
$comment->post_id = 1;
$comment->save();

$comment = new Comment(); // 4 op post 1
$comment->content = 'Ik ben dol op historische fictie, maar heb "De Nachtraven" nog niet gelezen. Gaat zeker op mijn lijst!';
$comment->user_id = 4;
$comment->post_id = 1;
$comment->save();

$comment = new Comment(); // 5 op post 1
$comment->content = 'Non-fictie fan hier! Een aanrader is "Sapiens" van Yuval Noah Harari.';
$comment->user_id = 8;
$comment->post_id = 1;
$comment->save();

// Comments op post 2
$comment = new Comment(); // 1 op post 2
$comment->content = 'Mooie gaming setup! Mijn favoriete game is "Assassin\'s Creed Valhalla". Wie heeft dat ook gespeeld?';
$comment->user_id = 5;
$comment->post_id = 2;
$comment->save();

$comment = new Comment(); // 2 op post 2
$comment->content = '"Assassin\'s Creed Valhalla" is geweldig! Heb je ook de voorgaande delen gespeeld?';
$comment->user_id = 7;
$comment->post_id = 2;
$comment->save();

$comment = new Comment(); // 3 op post 2
$comment->content = 'Ik ben meer van de strategiespellen. Aanraders, iemand?';
$comment->user_id = 3;
$comment->post_id = 2;
$comment->save();

$comment = new Comment(); // 4 op post 2
$comment->content = '"Assassin\'s Creed Valhalla" is episch! Ik ben ook fan van strategische spellen. Probeer "Civilization VI" eens!';
$comment->user_id = 10;
$comment->post_id = 2;
$comment->save();

$comment = new Comment(); // 5 op post 2
$comment->content = 'Ik speel voornamelijk online multiplayer-games. Zijn er anderen hier die dat ook doen?';
$comment->user_id = 2;
$comment->post_id = 2;
$comment->save();

// Comments op post 3
$comment = new Comment(); // 1 op post 3
$comment->content = 'Bedankt voor de tuinierentips! Wat zijn jullie favoriete bloemen om te kweken?';
$comment->user_id = 8;
$comment->post_id = 3;
$comment->save();

$comment = new Comment(); // 2 op post 3
$comment->content = 'Ik ben geen tuinier, maar ik hou van bloemen. Zonnebloemen zijn mijn favoriet!';
$comment->user_id = 4;
$comment->post_id = 3;
$comment->save();

$comment = new Comment(); // 3 op post 3
$comment->content = 'Mijn favoriete zijn rozen. Heb je specifieke tips voor het verzorgen van rozenstruiken?';
$comment->user_id = 11;
$comment->post_id = 3;
$comment->save();

$comment = new Comment(); // 4 op post 3
$comment->content = 'Zonnebloemen en rozen zijn prachtig! Ik hou ook van lavendel. Tips voor het kweken ervan?';
$comment->user_id = 6;
$comment->post_id = 3;
$comment->save();

$comment = new Comment(); // 5 op post 3
$comment->content = 'Ik ben niet een bloemenexpert, maar ik wil wel mijn eigen groenten kweken. Iemand ervaring met moestuinen?';
$comment->user_id = 9;
$comment->post_id = 3;
$comment->save();

// Comments op post 4
$comment = new Comment(); // 1 op post 4
$comment->content = 'Goede filmkeuze! Heeft iemand hier "Inception" gezien? Een meesterwerk!';
$comment->user_id = 2;
$comment->post_id = 4;
$comment->save();

$comment = new Comment(); // 2 op post 4
$comment->content = 'Ja, "Inception" is echt geweldig! Christopher Nolan weet altijd te verrassen met zijn films.';
$comment->user_id = 8;
$comment->post_id = 4;
$comment->save();

$comment = new Comment(); // 3 op post 4
$comment->content = 'Ik hou van klassieke films! Heeft iemand aanraders uit de jaren 50?';
$comment->user_id = 6;
$comment->post_id = 4;
$comment->save();

$comment = new Comment(); // 4 op post 4
$comment->content = '"Casablanca" is een absolute klassieker uit de jaren 40. Zeker de moeite waard!';
$comment->user_id = 10;
$comment->post_id = 4;
$comment->save();

$comment = new Comment(); // 5 op post 4
$comment->content = 'Ik ben meer van de moderne films. Iemand hier die "The Shape of Water" heeft gezien?';
$comment->user_id = 7;
$comment->post_id = 4;
$comment->save();

// Comments op post 5
$comment = new Comment(); // 1 op post 5
$comment->content = 'Fantastische fitnessmotivatie! Mijn favoriete workout is high-intensity interval training (HIIT).';
$comment->user_id = 4;
$comment->post_id = 5;
$comment->save();

$comment = new Comment(); // 2 op post 5
$comment->content = 'HIIT is geweldig voor het verbranden van vet! Doe je het thuis of in de sportschool?';
$comment->user_id = 9;
$comment->post_id = 5;
$comment->save();

$comment = new Comment(); // 3 op post 5
$comment->content = 'Ik ben op zoek naar een nieuwe sport. Iemand suggesties?';
$comment->user_id = 11;
$comment->post_id = 5;
$comment->save();

$comment = new Comment(); // 4 op post 5
$comment->content = 'Zwemmen is een geweldige full-body workout! Wie zwemt hier regelmatig?';
$comment->user_id = 5;
$comment->post_id = 5;
$comment->save();

$comment = new Comment(); // 5 op post 5
$comment->content = 'Ik ben meer van de ontspannende yoga. Heeft iemand tips voor beginners?';
$comment->user_id = 2;
$comment->post_id = 5;
$comment->save();

// Comments op post 6
$comment = new Comment(); // 1 op post 6
$comment->content = 'Leuk schrijfproject! Ik werk aan een kort verhaal over tijdreizen. Iemand hier fan van sci-fi?';
$comment->user_id = 8;
$comment->post_id = 6;
$comment->save();

$comment = new Comment(); // 2 op post 6
$comment->content = 'Sci-fi is mijn favoriete genre! Heb je "Dune" van Frank Herbert gelezen?';
$comment->user_id = 7;
$comment->post_id = 6;
$comment->save();

$comment = new Comment(); // 3 op post 6
$comment->content = 'Ik schrijf voornamelijk poëzie. Heeft iemand hier een favoriete dichter?';
$comment->user_id = 3;
$comment->post_id = 6;
$comment->save();

$comment = new Comment(); // 4 op post 6
$comment->content = 'Pablo Neruda is een van mijn favorieten. Zijn gedichten zijn zo krachtig.';
$comment->user_id = 11;
$comment->post_id = 6;
$comment->save();

$comment = new Comment(); // 5 op post 6
$comment->content = 'Ik ben meer van de fantasyverhalen. Iemand hier die zelf schrijft?';
$comment->user_id = 9;
$comment->post_id = 6;
$comment->save();

// Comments op post 7
$comment = new Comment(); // 1 op post 7
$comment->content = 'Technologie trends zijn fascinerend! Heeft iemand hier ervaring met kunstmatige intelligentie?';
$comment->user_id = 10;
$comment->post_id = 7;
$comment->save();

$comment = new Comment(); // 2 op post 7
$comment->content = 'Ja, ik werk met AI in mijn dagelijkse werkzaamheden. Het is echt baanbrekend!';
$comment->user_id = 5;
$comment->post_id = 7;
$comment->save();

$comment = new Comment(); // 3 op post 7
$comment->content = 'Ik ben benieuwd naar de toekomst van quantumcomputing. Heeft iemand hier kennis van?';
$comment->user_id = 6;
$comment->post_id = 7;
$comment->save();

$comment = new Comment(); // 4 op post 7
$comment->content = 'Quantumcomputing is complex maar veelbelovend. Zijn er hier quantumfysici?';
$comment->user_id = 2;
$comment->post_id = 7;
$comment->save();

$comment = new Comment(); // 5 op post 7
$comment->content = 'Ik ben meer van de gadgets. Wat is jouw favoriete technologische gadget op dit moment?';
$comment->user_id = 8;
$comment->post_id = 7;
$comment->save();

// Comments op post 8
$comment = new Comment(); // 1 op post 8
$comment->content = 'Gekke huisdierenverhalen zijn altijd leuk! Heeft iemand hier een huisdier met een grappige eigenschap?';
$comment->user_id = 9;
$comment->post_id = 8;
$comment->save();

$comment = new Comment(); // 2 op post 8
$comment->content = 'Mijn kat heeft de gewoonte om in dozen te kruipen, ongeacht hoe klein. Zo grappig!';
$comment->user_id = 7;
$comment->post_id = 8;
$comment->save();

$comment = new Comment(); // 3 op post 8
$comment->content = 'Huisdieren zijn geweldig! Heeft iemand ervaring met het trainen van parkieten?';
$comment->user_id = 3;
$comment->post_id = 8;
$comment->save();

$comment = new Comment(); // 4 op post 8
$comment->content = 'Mijn hond doet altijd alsof hij slaapt als hij betrapt wordt op kattenkwaad. Iemand anders met een ondeugende viervoeter?';
$comment->user_id = 6;
$comment->post_id = 8;
$comment->save();

$comment = new Comment(); // 5 op post 8
$comment->content = 'Ik heb een schildpad die grappig snel kan rennen als hij eten ruikt. Huisdieren zijn echt uniek!';
$comment->user_id = 4;
$comment->post_id = 8;
$comment->save();

// Comments op post 9
$comment = new Comment(); // 1 op post 9
$comment->content = 'Lege paginas zijn het begin van een nieuw avontuur! Wat voor soort verhaal ben je van plan te schrijven?';
$comment->user_id = 5;
$comment->post_id = 9;
$comment->save();

$comment = new Comment(); // 2 op post 9
$comment->content = 'Ik ben ook een schrijver! Inspiratie kan overal vandaan komen. Heb je al een titel in gedachten?';
$comment->user_id = 8;
$comment->post_id = 9;
$comment->save();

$comment = new Comment(); // 3 op post 9
$comment->content = 'Lege paginas zijn zowel opwindend als intimiderend. Heb je een specifiek genre in gedachten?';
$comment->user_id = 2;
$comment->post_id = 9;
$comment->save();

$comment = new Comment(); // 4 op post 9
$comment->content = 'Fantastisch! Ik ben meer van de poëzie. Overweeg je ook gedichten toe te voegen?';
$comment->user_id = 10;
$comment->post_id = 9;
$comment->save();

$comment = new Comment(); // 5 op post 9
$comment->content = 'Ik schrijf ook! Misschien kunnen we ideeën uitwisselen. Wat is jouw grootste uitdaging als schrijver?';
$comment->user_id = 7;
$comment->post_id = 9;
$comment->save();

// Comments op post 10
$comment = new Comment(); // 1 op post 10
$comment->content = 'Forum posts zijn geweldig om te discussiëren! Wat is het meest interessante discussieonderwerp dat je hier hebt gezien?';
$comment->user_id = 4;
$comment->post_id = 10;
$comment->save();

$comment = new Comment(); // 2 op post 10
$comment->content = 'Ik hou van de diversiteit aan meningen hier. Wat is jouw standpunt over kunstmatige intelligentie?';
$comment->user_id = 6;
$comment->post_id = 10;
$comment->save();

$comment = new Comment(); // 3 op post 10
$comment->content = 'Kunstmatige intelligentie is fascinerend! Welke technologische trend vind je het meest opwindend?';
$comment->user_id = 3;
$comment->post_id = 10;
$comment->save();

$comment = new Comment(); // 4 op post 10
$comment->content = 'Mijn favoriete onderwerp is ruimteverkenning. Wat denken jullie van toekomstige bemande missies naar Mars?';
$comment->user_id = 9;
$comment->post_id = 10;
$comment->save();

$comment = new Comment(); // 5 op post 10
$comment->content = 'Interessant! Ik ben meer geïnteresseerd in duurzaamheid. Zijn er anderen die actief betrokken zijn bij milieukwesties?';
$comment->user_id = 11;
$comment->post_id = 10;
$comment->save();
    }
}
