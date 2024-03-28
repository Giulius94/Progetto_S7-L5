import React from 'react'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Table } from 'react-bootstrap';

export default function GestionePrenotazioni({prenotazioni, user}) {
    console.log(prenotazioni)
    console.log(user)
  return (
    <AuthenticatedLayout user={user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Gestione Prenotazioni</h2>}
        >
     <Table striped>
      <thead>
        <tr>
          <th>Id Prenotazione</th>
          <th>Nome Utente</th>
          <th>Stato Prenotazione</th>
          <th>Username</th>
        </tr>
      </thead>
      {prenotazioni.map((p) => (
        <div key={p.id}>
      <tbody>
        <tr>
          <td>{p.id}</td>
        </tr>
        <tr>
          <td>{p.stato}</td>
        </tr>
      </tbody>
      </div>
       ))}
    </Table>
    </AuthenticatedLayout>
  )
}
