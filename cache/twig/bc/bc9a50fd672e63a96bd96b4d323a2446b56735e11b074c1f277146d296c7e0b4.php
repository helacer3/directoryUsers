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

/* layout.html.twig */
class __TwigTemplate_a6cef799aaa70a94d637b3f338d5cad697f52c80e95e407353e950f859226efb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
    \t<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 text-right mt-1 mb-3\">
                    ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", true, true, false, 15)) {
            // line 16
            echo "                        <a href=\"index.php?page=login\" class=\"btn-primary\">Login</a>
                        <a href=\"index.php?page=register\" class=\"btn-info\">Register</a>
                    ";
        } else {
            // line 19
            echo "                        <a href=\"index.php?page=logout\" class=\"btn-warning\">Salir</a>
                    ";
        }
        // line 21
        echo "                </div>
            </div>
        \t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t</div>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Prueba Zinobe";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"./assets/css/style.css\">
    \t";
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  111 => 25,  105 => 23,  99 => 7,  95 => 6,  88 => 5,  82 => 30,  80 => 25,  77 => 24,  75 => 23,  71 => 21,  67 => 19,  62 => 16,  60 => 15,  53 => 10,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Prueba Zinobe{% endblock %}</title>
        {% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"./assets/css/style.css\">
    \t{% endblock %}
    </head>
    <body>
    \t<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12 text-right mt-1 mb-3\">
                    {% if (session.user is not defined) %}
                        <a href=\"index.php?page=login\" class=\"btn-primary\">Login</a>
                        <a href=\"index.php?page=register\" class=\"btn-info\">Register</a>
                    {% else %}
                        <a href=\"index.php?page=logout\" class=\"btn-warning\">Salir</a>
                    {% endif %}
                </div>
            </div>
        \t{% block body %}{% endblock %}
\t\t</div>
        {% block javascripts %}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\pruebas\\prbZinobe\\templates\\views\\layout.html.twig");
    }
}
