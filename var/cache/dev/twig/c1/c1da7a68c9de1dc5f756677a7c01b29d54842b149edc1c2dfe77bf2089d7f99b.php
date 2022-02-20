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

/* post/index.html.twig */
class __TwigTemplate_711133cb41335171fd26069d98aed959ac7e80a123393ac69eb72150e515120e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <main class=\"page-content\">
        <div class=\"container-fluid\">
            <h1 class=\"d-flex w-100\">
                <span>
                    Posts
                </span>
                <a href=\"\" class=\"text-info ml-auto\">
                    <i class=\"bi bi-plus\"></i>
                </a>
            </h1>
            <hr>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Options</th>
                    </tr>

                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"#\" class=\"text-info\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"#\" class=\"text-info\"><i class=\"bi bi-pen\"></i></a>
                            <a href=\"#\" class=\"text-danger\"><i class=\"bi bi-trash\"></i></a>

                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                </tbody>

            </table>
        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  99 => 30,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

    <main class=\"page-content\">
        <div class=\"container-fluid\">
            <h1 class=\"d-flex w-100\">
                <span>
                    Posts
                </span>
                <a href=\"\" class=\"text-info ml-auto\">
                    <i class=\"bi bi-plus\"></i>
                </a>
            </h1>
            <hr>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Options</th>
                    </tr>

                </thead>
                <tbody>
                    {% for post in posts %}
                    <tr>
                        <td>{{ post.id }}</td>
                        <td>{{ post.name }}</td>
                        <td>{{ post.category }}</td>
                        <td>{{ post.author }}</td>
                        <td>
                            <a href=\"#\" class=\"text-info\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"#\" class=\"text-info\"><i class=\"bi bi-pen\"></i></a>
                            <a href=\"#\" class=\"text-danger\"><i class=\"bi bi-trash\"></i></a>

                        </td>
                    </tr>
                    {% endfor %}

                </tbody>

            </table>
        </div>
    </main>
{% endblock %}
", "post/index.html.twig", "/Applications/MAMP/htdocs/iim-symfony/project/iim-project/templates/post/index.html.twig");
    }
}
