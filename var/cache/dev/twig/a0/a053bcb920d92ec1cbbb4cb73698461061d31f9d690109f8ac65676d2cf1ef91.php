<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/sidebar.html.twig */
class __TwigTemplate_5e1013a26d740572752e2abd505be970f89311730caa71160449f272392aae23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "gqzgq
<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
        <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"/></svg>
        <span class=\"fs-4\">Sidebar</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link active\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#home\"/></svg>
                Home
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Orders
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#grid\"/></svg>
                Products
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class=\"dropdown\">
        <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"https://github.com/mdo.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
            <strong>mdo</strong>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdownUser1\">
            <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
        </ul>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("gqzgq
<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
        <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"/></svg>
        <span class=\"fs-4\">Sidebar</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link active\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#home\"/></svg>
                Home
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Orders
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#grid\"/></svg>
                Products
            </a>
        </li>
        <li>
            <a href=\"#\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class=\"dropdown\">
        <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"https://github.com/mdo.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
            <strong>mdo</strong>
        </a>
        <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdownUser1\">
            <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
        </ul>
    </div>
</div>
", "admin/sidebar.html.twig", "/Applications/MAMP/htdocs/iim-symfony/project/iim-project/templates/admin/sidebar.html.twig");
    }
}
