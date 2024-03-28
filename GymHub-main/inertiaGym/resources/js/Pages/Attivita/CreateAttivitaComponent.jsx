import React from 'react';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link, useForm } from '@inertiajs/react';
import { Form, Button, Container } from 'react-bootstrap';
import {ArrowLeftCircleFill} from 'react-bootstrap-icons';


export default function CreateAttivitaComponent({ user }) {
    const { data, setData, post, processing, errors } = useForm({
        name: "",
        description: "",
        start_date: "",
        end_date: "",
        orario_inizio: "",
        orario_fine: ""
    });

    function submit(e) {
        e.preventDefault();
        post('/attivita',data); // Assicurati che questo sia l'endpoint corretto
    }

    return (
        <AuthenticatedLayout user={user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Crea una nuova attività</h2>}
        >
            <Container>
            <Link href='/attivita' as="button" type="button" className='btn fs-3 mt-4' ><ArrowLeftCircleFill /></Link>

                <Form onSubmit={submit}>
                    <Form.Group className="mb-3 mt-5">
                        <Form.Label>Nome attività</Form.Label>
                        <Form.Control 
                            type="text" 
                            value={data.name} 
                            onChange={e => setData('name', e.target.value)}
                            isInvalid={!!errors.name}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.name}
                        </Form.Control.Feedback>
                    </Form.Group>

                    <Form.Group className="mb-3">
                        <Form.Label>Descrizione Attività</Form.Label>
                        <Form.Control 
                            type="text" 
                            value={data.description} 
                            onChange={e => setData('description', e.target.value)}
                            isInvalid={!!errors.description}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.description}
                        </Form.Control.Feedback>
                    </Form.Group>

                    <Form.Group className="mb-3">
                        <Form.Label>Data inizio attività</Form.Label>
                        <Form.Control 
                            type="date" 
                            value={data.start_date} 
                            onChange={e => setData('start_date', e.target.value)}
                            isInvalid={!!errors.start_date}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.start_date}
                        </Form.Control.Feedback>
                    </Form.Group>

                    <Form.Group className="mb-3">
                        <Form.Label>Data fine attività</Form.Label>
                        <Form.Control 
                            type="date" 
                            value={data.end_date} 
                            onChange={e => setData('end_date', e.target.value)}
                            isInvalid={!!errors.end_date}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.end_date}
                        </Form.Control.Feedback>
                    </Form.Group>
                    <Form.Group className="mb-3">
                        <Form.Label>Orario di inizio</Form.Label>
                        <Form.Control 
                            type="time" 
                            value={data.orario_inizio} 
                            onChange={e => setData('orario_inizio', e.target.value)}
                            isInvalid={!!errors.orario_inizio}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.orario_inizio}
                        </Form.Control.Feedback>
                    </Form.Group>

                    <Form.Group className="mb-3">
                        <Form.Label>Orario di fine</Form.Label>
                        <Form.Control 
                            type="time" 
                            value={data.orario_fine} 
                            onChange={e => setData('orario_fine', e.target.value)}
                            isInvalid={!!errors.orario_fine}
                        />
                        <Form.Control.Feedback type="invalid">
                            {errors.orario_fine}
                        </Form.Control.Feedback>
                    </Form.Group>

                    <Button variant="primary" type="submit" disabled={processing}>
                        Crea Attività
                    </Button>
                </Form>
            </Container>
        </AuthenticatedLayout>
    );
}
