import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Body extends Component{
    render(){
        return(
            <div className="">
              <div className="page-title">
                <div className="title_left">
                  <h3>Plain Page</h3>
                </div>
            </div>

              <div className="clearfix"></div>

              <div className="row">
                <div className="col-md-12 col-sm-12 col-xs-12">
                  <div className="x_panel">
                    <div className="x_title">
                      <h2>Plain Page</h2>
                      <div className="clearfix"></div>
                    </div>
                    <div className="x_content">
                        Add content to the page ...
                    </div>
                  </div>
                </div>
              </div>
            </div>
        );
    }
}

if(document.getElementById('Mostrar_Contenido')){
    ReactDOM.render(<Body />,document.getElementById('Mostrar_Contenido'));
}
