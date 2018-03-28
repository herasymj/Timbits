<?php
/**
 * Created by PhpStorm.
 * User: Maksym
 * Date: 2018-03-27
 * Time: 4:40 PM
 */


echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-dark navbar-dark\">";
echo "    <a class=\"navbar-brand\"href=\"#\">HELL <i class=\"fa fa-rebel\" aria-hidden=\"true\"></i></a>";
echo "    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
echo "        <span class=\"navbar-toggler-icon\"></span>";
echo "    </button>";

echo "    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">";
echo "       <ul class=\"navbar-nav mr-auto\">";
echo "            <li class=\"nav-item active\">";
echo "                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>";
echo "            </li>";
echo "            <li class=\"nav-item active\">";
echo "                <a class=\"nav-link\" href=\"#\">Login/Signup <span class=\"sr-only\">(current)</span></a>";
echo "            </li>";
echo "            <li class=\"nav-item dropdown\">";
echo "                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
echo "    Dropdown";
echo "                </a>";
echo "                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">";
echo "                    <a class=\"dropdown-item\" href=\"#\">Action</a>";
echo "                   <a class=\"dropdown-item\" href=\"#\">Another action</a>";
echo "                    <div class=\"dropdown-divider\"></div>";
echo "                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>";
echo "                </div>";
echo "            </li>";

echo "        </ul>";
echo "        <form class=\"form-inline my-2 my-lg-0\">";
echo "            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">";
echo "            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>";
echo "        </form>";
echo "      <li class=\"nav-item active\">";
echo "            <a class=\"nav-link\" href=\"#\">Logout <span class=\"sr-only\">(current)</span></a>";
echo "        </li>";
echo "  </div>";
echo "</nav>";
?>