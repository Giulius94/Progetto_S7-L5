import React from 'react';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Card, Button, Container, Row, Col } from 'react-bootstrap';
import { Link } from '@inertiajs/react';
import CarouselSlider from '@/Layouts/CarouselSlider';
import { Trash2Fill } from 'react-bootstrap-icons';
import { Inertia } from '@inertiajs/inertia';
export default function AttivitaComponent({ attivita, user }) {
  
    return (
        
        <AuthenticatedLayout user={user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Attività</h2>}
        >
            <Container>
                <CarouselSlider />
                <Row className='my-2'>
                    <Col>
                        <Link method="get" href='/attivita/create' className='d-flex justify-content-center my-3'>
                            <Button variant="primary">Crea Nuova Attività</Button>
                        </Link>
                    </Col>
                </Row>

                <Row xs={1} md={3} className="g-4">
                    {attivita.map((attivita) => (
                        <Col key={attivita.id}>
                            <Card style={{ width: '18rem' }}>
                                <Card.Img
                                    variant="top"
                                    src="https://www.teahub.io/photos/full/28-284379_photo-wallpaper-man-workout-gym-working-gym-workout.jpg"
                                />
                                <Card.Body>
                                    <Card.Title>{attivita.name}</Card.Title>
                                    <Card.Text>{attivita.description}</Card.Text>
                                    {attivita.oraris && attivita.oraris.map((orari) => (
                                        <Card.Text key={orari.id}>{orari.orario_inizio}-{orari.orario_fine}</Card.Text>
                                    ))}

                                    {user.attivita_id !== null && user.attivita_id === attivita.id ? (
                                        <button className='btn btn-secondary' disabled>Già Prenotato</button>
                                    ) : (
                                        <p></p>
                                    )}


                                    <div className='d-flex my-2'>

                                        {user.is_admin === 1 ? (
                                            <button
                                                type="button"
                                                className='btn btn-small btn-danger mx-2'
                                                onClick={() => {
                                                    if (window.confirm('Sei sicuro di voler cancellare questa attività?')) {
                                                        Inertia.delete(`/attivita/${attivita.id}`);
                                                    }
                                                }}
                                            >
                                                <Trash2Fill className='text-black' />
                                            </button>
                                        ) : (
                                            <p></p>
                                        )}



                                        <Link href={`/attivita/${attivita.id}`} as="button" type="button" className='btn btn-primary mx-2' >Dettagli</Link>
                                    </div>
                                </Card.Body>
                            </Card>
                        </Col>
                    ))}
                </Row>
            </Container>
        </AuthenticatedLayout>
    );
}
