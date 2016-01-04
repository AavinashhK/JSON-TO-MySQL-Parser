# JSON-TO-MySQL-Parser
IMDB Top 250 Data Source Parser - Coding Assignment - Acquia India 

For the Coding Exercise assigned by Acquia India, the data source provided was JSON Encoded.
JSON stands for JavaScript Object Notation which means the data source is in object form.
Objects can be converted to array.

In PHP, the json_decode() function provides the functionality to convert JSON objects into
arrays.

Example:

$datasource=”json data source”;
$parsing = json_decode($data_source);
foreach($parsing as $entity) {
echo $entity->plot;
}

Using the above function, I’ve created a SQL query in which each data objects were passed.
The Query was passed using mysql_query() function which inserted all the records in the
database.
