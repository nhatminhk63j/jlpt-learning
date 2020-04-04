import React, { Component } from 'react';
import './Login.scss';
import {Form, Button} from 'react-bootstrap'

class Login extends Component {
    render() {
        return (
            <div className="login d-flex flex-column align-items-center justify-content-center">
                <h4>Login</h4>
                <Form className="login__form">
                    <Form.Group controlId="formBasicEmail">
                        <Form.Label>Email address</Form.Label>
                        <Form.Control type="email" placeholder="Enter email" />
                        <Form.Text className="text-muted">
                        We'll never share your email with anyone else.
                        </Form.Text>
                    </Form.Group>

                    <Form.Group controlId="formBasicPassword">
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" placeholder="Password" />
                    </Form.Group>
                    <Form.Group controlId="formBasicCheckbox">
                        <Form.Check type="checkbox" label="Save login accout for next time" />
                    </Form.Group>
                    <Button variant="primary" type="submit">
                        Login
                    </Button>
                </Form>
            </div>
        );
    }
}

export default Login;