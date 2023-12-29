

<style>
table {
  margin: 0 auto;
  position: relative;
  top: 200px;
}

/* Définir la couleur de fond de la page */
body {
  background-color: navy;
}

/* Définir la couleur de fond et la bordure du tableau */
table {
  background-color: white;
  border: 3px solid purple;
}

/* Définir l'espacement et l'alignement des cellules */
th, td {
  padding: 20px;
  text-align: left;
}
</style>

<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
        @endforeach
    </table>