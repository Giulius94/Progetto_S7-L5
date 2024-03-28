import React from 'react'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Card, Container } from 'react-bootstrap';
import { Link, useForm } from '@inertiajs/react';
import { ArrowLeftCircleFill } from 'react-bootstrap-icons';




export default function DetailAttivitaComponent({ attivita, user }) {



  const { post, progress } = useForm({
    stato: 'prenotato',
    attivita_id: attivita.id,
    orari_id: attivita.oraris[0].id
  })

  function submit(e) {
    e.preventDefault()
    post('/prenotazioni')
  }
  return (
    <AuthenticatedLayout user={user}
      header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dettaglio Attività</h2>}
    >
      <Container className='mt-5'>
        <Link href='/attivita' as="button" type="button" className='btn fs-3' ><ArrowLeftCircleFill /></Link>
        <Card className="text-center">
          <Card.Body>
            <Card.Title>{attivita.name}</Card.Title>
            <Card.Img
              className="w-50 mx-auto"
              variant="top"
              src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg"
            />
            <Card.Text>
              {attivita.description}
            </Card.Text>
          </Card.Body>
          {attivita.oraris.map((oraris) => (
            <div key={oraris.id} className='d-flex align-items-center justify-content-center my-4'>
              <Card.Footer className="text-muted">Orario Attività : {oraris.orario_inizio} - {oraris.orario_fine}</Card.Footer>
              <form onSubmit={submit}>
                {progress && (
                  <progress value={progress.percentage} max="100">
                    {progress.percentage}%
                  </progress>
                )}
                <button className='btn btn-primary' type="submit">Prenota</button>
              </form>
            </div>
          ))}
        </Card>
      </Container>
    </AuthenticatedLayout>
  )
}
