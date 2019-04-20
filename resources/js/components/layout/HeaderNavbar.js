import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class HeaderNavbar extends Component {
    render() {
        return (
            <div className="top_nav">
                <div className="nav_menu">
                    <nav>
                        <div className="nav toggle">
                            <a id="menu_toggle">
                                <i className="fa fa-bars" />
                            </a>
                        </div>

                        <ul className="nav navbar-nav navbar-right">
                            <li className="">
                                <a
                                    href="javascript:;"
                                    className="user-profile dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <img src="Panel/images/img.jpg" alt="" />
                                    iiiii
                                    <span className=" fa fa-angle-down" />
                                </a>
                                <ul className="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="javascript:;"> Perfíl</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span className="badge bg-red pull-right">
                                                Incompleto
                                            </span>
                                            <span>Configuración</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Ayuda</a>
                                    </li>
                                    <form
                                        method="POST"
                                        action="{{ route('logout') }}"
                                    >
                                        <li>
                                            <button
                                                className="btn btn-default btn-block"
                                                type="submit"
                                            >
                                                <i className="fa fa-sign-out" />
                                                Cerrar Sesíon
                                            </button>
                                        </li>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        );
    }
}

if (document.getElementById("Mostrar_Navbar_Header")) {
    ReactDOM.render(
        <HeaderNavbar />,
        document.getElementById("Mostrar_Navbar_Header")
    );
}
