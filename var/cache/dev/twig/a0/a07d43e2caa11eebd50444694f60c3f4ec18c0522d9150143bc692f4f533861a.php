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
class __TwigTemplate_2c72f7970c8c06fb84c6747b2b2611e5eed50e959d1c88a838f745e7d085d64a extends Template
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
        echo "<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
        <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_app_index");
        echo "\"/></svg>
        <span class=\"fs-4\">Blog</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link active\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_app_index");
        echo "\"/></svg>
                Home
            </a>
        </li>
        <li>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
        echo "\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Posts
            </a>
        </li>
        <li>
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
        echo "\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Authors
            </a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
        echo "\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Categories
            </a>
        </li>
    </ul>
    <hr>
    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none\">
        <img src=\"https://camo.githubusercontent.com/f00935c3403b84622adc316c57927873b435f719512c3040341cefd91368cb46/68747470733a2f2f7374617469632e7769787374617469632e636f6d2f6d656469612f3531653330645f64353165396137363735623134666563393035306331376331333365623465347e6d76322e676966\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
        <strong>Hassina</strong>
        <p>Admin</p>
    </a>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  80 => 27,  71 => 21,  62 => 15,  54 => 10,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-shrink-0 p-3 text-white bg-dark\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
        <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"{{ path('app_app_index')}}\"/></svg>
        <span class=\"fs-4\">Blog</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto\">
        <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link active\" aria-current=\"page\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"{{ path('app_app_index') }}\"/></svg>
                Home
            </a>
        </li>
        <li>
            <a href=\"{{ path('admin') }}\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#speedometer2\"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_post_index') }}\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Posts
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_post_index') }}\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Authors
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_post_index') }}\" class=\"nav-link text-white\">
                <svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
                Categories
            </a>
        </li>
    </ul>
    <hr>
    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none\">
        <img src=\"https://camo.githubusercontent.com/f00935c3403b84622adc316c57927873b435f719512c3040341cefd91368cb46/68747470733a2f2f7374617469632e7769787374617469632e636f6d2f6d656469612f3531653330645f64353165396137363735623134666563393035306331376331333365623465347e6d76322e676966\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
        <strong>Hassina</strong>
        <p>Admin</p>
    </a>

</div>
", "admin/sidebar.html.twig", "/Applications/MAMP/htdocs/iim-symfony/project/iim-project/templates/admin/sidebar.html.twig");
    }
}
