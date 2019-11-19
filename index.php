<?php
require __DIR__ . '/vendor/autoload.php';

use App\Classes\L\BooksList;
use App\Classes\L\ElectronicBooksList;

use App\Classes\PrintText;
use App\Classes\SortArray;

use App\Classes\I\Aviary;
use App\Classes\I\Bird;
use App\Classes\I\Penguin;
use App\Classes\I\Parrot;

use App\Classes\D\PostSender;
use App\Classes\D\LinkPost;
use App\Classes\D\CommentPost;

use App\Classes\IntArraySort;
use App\Classes\StringSort;

$books = new BooksList(Array('Book1', 'Book2'));
$elBooks = new ElectronicBooksList(Array('ElBook1', 'ElBook2'));

function printAll(BooksList $list)
{
    foreach ($list->getAll() as $item) {
        PrintText::print($item);
    }
}

printAll($books);
printAll($elBooks);

$aviary = new Aviary();
$bird = new Bird('owl');
$penguin = new Penguin('penguin');
$parrot = new Parrot('parrot');

$aviary->manageBird($bird);
$aviary->manageBird($penguin);
$aviary->manageBird($parrot);


$comment = new CommentPost();
$link = new LinkPost();

$commentSender = new PostSender($comment);
$linkSender = new PostSender($link);

$commentSender->sendPost();
$linkSender->sendPost();

$array = new IntArraySort(Array(1, 8, -4, 6, 2, 15, 0, -2));
$stringArray = new StringSort("sSRtring 1");
$sort = new SortArray();

$sortedIntArray = $sort->sort($array);
$sortedStringArray = $sort->sort($stringArray);

foreach ($sortedIntArray as $i){
    echo $i;
}

echo "<p>$sortedStringArray</p>";
