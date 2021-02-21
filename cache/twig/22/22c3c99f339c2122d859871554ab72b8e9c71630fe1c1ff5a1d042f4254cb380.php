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

/* index.html.twig */
class __TwigTemplate_30ad701a8de54db4184df4d25f933102ff8a01364f3bbb9e563acc1af6a21ab0 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home - Directorio de Usuarios";
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
\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", true, true, false, 9)) {
            // line 10
            echo "\t\t\t<div class=\"col-12\">
\t\t\t\tBúsqueda de usuarios por nombre o correo electrónico:
\t\t\t\t<form>
\t\t\t\t\t<input type=\"text\" name=\"usr_value\" id=\"usr_value\" placeholder=\"Favor, digite el documento o correo electrónico del usuario\" size=\"80\" class=\"pl-1\">
\t\t\t\t\t<button id=\"btn_fnduser\" class=\"btn-success\">Buscar usuario</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div id=\"cnt_userinfo\" class=\"col-12 d-none\">
\t\t\t\t<b>Nombre: </b> <div id=\"usr_name\"></div><br />
\t\t\t\t<b>Correo: </b> <div id=\"usr_email\"></div><br />
\t\t\t\t<b>Documento: </b> <div id=\"usr_document\"></div><br />
\t\t\t\t<b>Código o Nombre Pais: </b> <div id=\"usr_country\"></div><br />
\t\t\t</div>
\t\t";
        } else {
            // line 24
            echo "\t\t\t<div class=\"offset-md-2 col-8 alert alert-danger\">
\t\t\t\tFavor identifíquese, para poder acceder al directorio de usuarios!
\t\t\t</div>
\t\t";
        }
        // line 28
        echo "\t</div>
\t";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "   \t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    \t<script src=\"./assets/js/script.js\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  101 => 29,  98 => 28,  92 => 24,  76 => 10,  74 => 9,  71 => 8,  67 => 7,  60 => 5,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Home - Directorio de Usuarios{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block body %}
\t<div class=\"row\">
\t\t{% if (session.user is defined) %}
\t\t\t<div class=\"col-12\">
\t\t\t\tBúsqueda de usuarios por nombre o correo electrónico:
\t\t\t\t<form>
\t\t\t\t\t<input type=\"text\" name=\"usr_value\" id=\"usr_value\" placeholder=\"Favor, digite el documento o correo electrónico del usuario\" size=\"80\" class=\"pl-1\">
\t\t\t\t\t<button id=\"btn_fnduser\" class=\"btn-success\">Buscar usuario</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div id=\"cnt_userinfo\" class=\"col-12 d-none\">
\t\t\t\t<b>Nombre: </b> <div id=\"usr_name\"></div><br />
\t\t\t\t<b>Correo: </b> <div id=\"usr_email\"></div><br />
\t\t\t\t<b>Documento: </b> <div id=\"usr_document\"></div><br />
\t\t\t\t<b>Código o Nombre Pais: </b> <div id=\"usr_country\"></div><br />
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"offset-md-2 col-8 alert alert-danger\">
\t\t\t\tFavor identifíquese, para poder acceder al directorio de usuarios!
\t\t\t</div>
\t\t{% endif %}
\t</div>
\t{% block javascripts %}
   \t\t{{ parent() }}
    \t<script src=\"./assets/js/script.js\"></script>
\t{% endblock %}
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\pruebas\\prbZinobe\\templates\\views\\index.html.twig");
    }
}
