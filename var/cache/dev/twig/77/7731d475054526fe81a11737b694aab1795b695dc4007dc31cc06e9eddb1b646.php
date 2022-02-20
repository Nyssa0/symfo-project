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

/* app/index.html.twig */
class __TwigTemplate_5b105f2a996dd5b3d791648906da3e7482aa72c6d1c5f5dfd177da0e78d05b8e extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
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
    <main class=\"container\">
        <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
            <div class=\"col-md-6 px-0\">
                <h1 class=\"display-4 fst-italic\">Welcome on the blog !</h1>
                <p class=\"lead my-3\">This page contains multiple articles available to read. You can also access the admin view to be have more options available. </p>
            </div>
        </div>

        <div class=\"row mb-2\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "                <div class=\"col-md-6\">
                    <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
                        <div class=\"col p-4 d-flex flex-column position-static\">
";
            // line 24
            echo "                            <h3 class=\"mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>
                            <div class=\"mb-1 text-muted\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 25)), "html", null, true);
            echo "</div>
                            <p class=\"card-text mb-auto\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "intro", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_showPost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"stretched-link\">Continue reading</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        </div>

    </main>

    <footer class=\"blog-footer\">
        <p>Blog template built for <a href=\"https://getbootstrap.com/\">Bootstrap</a> by <a
                    href=\"https://twitter.com/mdo\">@mdo</a>.</p>
        <p>
            <a href=\"#\">Back to top</a>
        </p>
    </footer>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  108 => 27,  104 => 26,  100 => 25,  95 => 24,  90 => 18,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

    <main class=\"container\">
        <div class=\"p-4 p-md-5 mb-4 text-white rounded bg-dark\">
            <div class=\"col-md-6 px-0\">
                <h1 class=\"display-4 fst-italic\">Welcome on the blog !</h1>
                <p class=\"lead my-3\">This page contains multiple articles available to read. You can also access the admin view to be have more options available. </p>
            </div>
        </div>

        <div class=\"row mb-2\">

            {% for post in posts %}
                <div class=\"col-md-6\">
                    <div class=\"row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">
                        <div class=\"col p-4 d-flex flex-column position-static\">
{#
                            <strong class=\"d-inline-block mb-2 text-primary\">{{ post.category }}</strong>
#}
                            <h3 class=\"mb-0\">{{ post.name }}</h3>
                            <div class=\"mb-1 text-muted\">{{ post.date | date }}</div>
                            <p class=\"card-text mb-auto\">{{ post.intro }}</p>
                            <a href=\"{{ path('app_post_showPost', {id: post.id}) }}\" class=\"stretched-link\">Continue reading</a>
                        </div>
                    </div>
                </div>
            {% endfor %}

        </div>

    </main>

    <footer class=\"blog-footer\">
        <p>Blog template built for <a href=\"https://getbootstrap.com/\">Bootstrap</a> by <a
                    href=\"https://twitter.com/mdo\">@mdo</a>.</p>
        <p>
            <a href=\"#\">Back to top</a>
        </p>
    </footer>



{% endblock %}
", "app/index.html.twig", "/Applications/MAMP/htdocs/iim-symfony/project/iim-project/templates/app/index.html.twig");
    }
}
