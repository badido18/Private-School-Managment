<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Gestion des Classes</title>
</head>
<body>
<form action="/logout" method="post">
    <input type="submit" value="se deconnecter">
</form>
<form action="/admin" method="get">
    <button>Retour</button>
</form>

<form action="/admin/classes/add" method="post">
    <input type="text" required name="level" placeholder="Niveau">
    <input type="number" required name="year" placeholder="Annee">
    <input type="text"  name="major" placeholder="Filiare">
    <input type="number" required name="number" placeholder="Numero de classe">
    <input type="text"  name="scheduleUrl" placeholder="Lien vers emplois du temps">
    <button>Ajouter</button>
</form>
<form action="/admin/classes/delete" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <button>Supprimmer</button>
</form>

<form action="/admin/classes/update" method="post">
    <input type="number" required name="id" placeholder="identifiant">
    <input type="text" required name="arg" placeholder="argument">
    <input type="text" required name="value" placeholder="valeur">
    <button>Mettre a jour</button>
</form>
<script>
    const getData = async (route) =>
        await fetch(route, 
        {
            method: 'GET'
        })
        .then( res => res.json())

    getData('/admin/classes/get')
    .then( data => console.log(data) );
</script>

</body>
</html>