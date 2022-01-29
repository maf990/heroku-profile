$client = new MongoDB\Client(
    'mongodb+srv://user:<password>@cluster0.kfis9.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->test;