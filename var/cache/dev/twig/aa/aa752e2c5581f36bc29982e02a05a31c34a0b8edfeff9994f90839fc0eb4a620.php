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
class __TwigTemplate_5da1fe088ccdae25da66bf8f600260da3028b0960c0b5c37dc1b28786668286c extends Template
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
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_newpost");
        echo "\" class=\"text-info ml-auto\">
                    <i class=\"bi bi-plus\"></i>
                </a>
            </h1>
            <hr>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Intro</th>
                        <th>Article</th>

                        ";
        // line 32
        echo "                        <th>Options</th>
                    </tr>

                </thead>
                <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "                    <tr>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "intro", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "article", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
";
            // line 49
            echo "                        <td>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_showPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"text-info\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_editpost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"text-info\"><i class=\"bi bi-pen\"></i></a>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_deletepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"text-danger\"><i class=\"bi bi-trash\"></i></a>

                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  150 => 57,  139 => 52,  135 => 51,  131 => 50,  128 => 49,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  109 => 38,  105 => 37,  98 => 32,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                <a href=\"{{ path('app_post_newpost') }}\" class=\"text-info ml-auto\">
                    <i class=\"bi bi-plus\"></i>
                </a>
            </h1>
            <hr>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Intro</th>
                        <th>Article</th>

                        {#
                        <th>Category</th>
#}
{#
                        <th>Author</th>
#}
                        <th>Options</th>
                    </tr>

                </thead>
                <tbody>
                    {% for post in posts %}
                    <tr>
                        <td>{{ post.id }}</td>
                        <td>{{ post.name }}</td>
                        <td>{{ post.intro }}</td>
                        <td>{{ post.article }}</td>
{#
                        <td>{{ post.category }}</td>
#}
{#
                        <td>{{ post.author }}</td>
#}
                        <td>
                            <a href=\"{{ path('app_post_showPost', {id: post.id}) }}\" class=\"text-info\"><i class=\"bi bi-eye\"></i></a>
                            <a href=\"{{ path('app_post_editpost', {id: post.id}) }}\" class=\"text-info\"><i class=\"bi bi-pen\"></i></a>
                            <a href=\"{{ path('app_post_deletepost', {id: post.id}) }}\" class=\"text-danger\"><i class=\"bi bi-trash\"></i></a>

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
