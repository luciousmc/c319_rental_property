import React from 'react';
import { Row, Col } from 'reactstrap';
import PropertyList from './property_list';

export default (props)=>(
    <React.Fragment>
            <Row>
                <div className="col">
                    <PropertyList />
                </div>
            </Row>
    </React.Fragment>
);