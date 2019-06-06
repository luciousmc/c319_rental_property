import React from 'react';
import { CardBody, Card, CardImg, CardTitle, Button, Row, Col, Container } from 'reactstrap';
import { Link } from 'react-router-dom';

export const LandingPage = ()=>(
    <React.Fragment>
        <Container>
            <Row className="col-8 offset-2">
                <Col className="mr-auto">
                    <Card style={{ width: '18rem' }}>
                        <CardImg  width="100%" src="images/manager_icon.png" />
                        <CardBody>
                            <CardTitle>Property Manager</CardTitle>
                            <Button color="info">
                                <Link to="/manager-main" style={{color: 'white'}}>
                                    Go to Portal
                                </Link>
                            </Button>
                        </CardBody>
                    </Card>
                </Col>
                <Col width="50%">
                <Card className="mr-auto" style={{ width: '18rem' }}>
                        <CardImg width="100%" src="images/tenant_icon.png" />
                        <CardBody>
                            <CardTitle>Tenant</CardTitle>
                            <Button color="info">
                                <Link to="/tenant-main" style={{color: 'white'}} >
                                Go to Portal
                                </Link>
                            </Button>
                        </CardBody>
                    </Card>
                </Col>
            </Row>
        </Container>
    </React.Fragment>
);