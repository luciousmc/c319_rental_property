import React from 'react';
import { Row } from 'reactstrap';
import AddTenant from './addTenant'

export default (props)=>(
    <React.Fragment>
        <Row>
            <div className="col">
                <AddTenant  propertyID={props.match.params.id}/>
            </div>
        </Row>
    </React.Fragment>
    );