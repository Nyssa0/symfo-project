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

/* nav.html.twig */
class __TwigTemplate_4e066315f7ffe5ff9e34c9b312d01aadb750ab66aa648160d9a5e31a7a080e75 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
        <div class=\"col-4 pt-1\">
            <a class=\"link-secondary\" href=\"#\">Subscribe</a>
        </div>
        <div class=\"col-4 text-center\">
            <a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
        </div>
        <div class=\"col-4 d-flex justify-content-end align-items-center\">
            <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
            </a>
            <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
        </div>
    </div>
</header>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
        <div class=\"col-4 pt-1\">
            <a class=\"link-secondary\" href=\"#\">Subscribe</a>
        </div>
        <div class=\"col-4 text-center\">
            <a class=\"blog-header-logo text-dark\" href=\"#\">Large</a>
        </div>
        <div class=\"col-4 d-flex justify-content-end align-items-center\">
            <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
            </a>
            <a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Sign up</a>
        </div>
    </div>
</header>", "nav.html.twig", "/Applications/MAMP/htdocs/iim-symfony/project/iim-project/templates/nav.html.twig");
    }
}
