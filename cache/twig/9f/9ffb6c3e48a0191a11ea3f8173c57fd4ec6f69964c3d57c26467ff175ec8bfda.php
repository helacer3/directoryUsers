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

/* login.html.twig */
class __TwigTemplate_c40504afc3f635f87511b848a2c1a70dae1e964df6340d423ded1e11f0e23018 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inicio de sesión - Directorio de Usuarios";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"row\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1>Inicio de Sesión</h1>
\t\t</div>
\t\t<div class=\"offset-md-4 col-4 text-center\">
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Correo:</label><br />
\t\t\t\t\t<input type=\"email\" name=\"usr_email\" placeholder=\"Favor digite su correo electrónico\"  class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password:</label><br />
\t\t\t\t\t<input type =\"password\" name=\"usr_password\" placeholder=\"Favor digite su contraseña\"  class=\"w-100\" required><br /><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type =\"hidden\" name=\"action\" value=\"login\"> 
\t\t\t\t\t<a href=\"index.php?page=register\" class=\"btn-warning\">Ir a Registrarme</a>
\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">Iniciar Sesión</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Inicio de sesión - Directorio de Usuarios{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1>Inicio de Sesión</h1>
\t\t</div>
\t\t<div class=\"offset-md-4 col-4 text-center\">
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Correo:</label><br />
\t\t\t\t\t<input type=\"email\" name=\"usr_email\" placeholder=\"Favor digite su correo electrónico\"  class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password:</label><br />
\t\t\t\t\t<input type =\"password\" name=\"usr_password\" placeholder=\"Favor digite su contraseña\"  class=\"w-100\" required><br /><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type =\"hidden\" name=\"action\" value=\"login\"> 
\t\t\t\t\t<a href=\"index.php?page=register\" class=\"btn-warning\">Ir a Registrarme</a>
\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">Iniciar Sesión</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}", "login.html.twig", "C:\\xampp\\htdocs\\pruebas\\prbZinobe\\templates\\views\\login.html.twig");
    }
}
