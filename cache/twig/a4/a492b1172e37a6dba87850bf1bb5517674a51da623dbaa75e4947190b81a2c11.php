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

/* register.html.twig */
class __TwigTemplate_cee090b606e316d8d3665d60096fc09fb08f2910480f853b19efd3474188fcb9 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Registro - Directorio de Usuarios";
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
        echo "\t<form action=\"index.php\" method=\"post\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<h1>Registro de Usuario</h1>
\t\t\t</div>
\t\t\t";
        // line 13
        if ((0 !== twig_compare(($context["errMessage"] ?? null), ""))) {
            // line 14
            echo "\t\t\t\t<div class=\"offset-md-4 col-4 text-center alert alert-danger\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, ($context["errMessage"] ?? null), "html", null, true);
            echo "\t
\t\t\t\t</div>
\t\t\t";
        }
        // line 18
        echo "\t\t\t<div class=\"offset-md-4 col-4 text-center\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Nombre:</label><br />
\t\t\t\t\t<input type=\"text\" name=\"usr_name\" placeholder=\"Favor digite su nombre completo\" class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Documento:</label><br />
\t\t\t\t\t<input type=\"text\" name=\"usr_document\" placeholder=\"Favor digite su número de documento\" class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Pais:</label><br />
\t\t\t\t\t<select id=\"usr_country\" name=\"usr_country\" class=\"w-100\">
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 31
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_code", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_code", [], "any", false, false, false, 31)), "CO"))) ? ("selected=\"selected\"") : (""));
            echo " >
\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "country_name", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</select><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Correo:</label><br />
\t\t\t\t\t<input type=\"email\" name=\"usr_email\" placeholder=\"Favor digite su correo electrónico\"  class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password:</label><br />
\t\t\t\t\t<input type =\"password\" name=\"usr_password\" placeholder=\"Favor digite su contraseña\"  class=\"w-100\" required><br /><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type =\"hidden\" name=\"action\" value=\"register\">
\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">Registrarme</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  113 => 32,  106 => 31,  102 => 30,  88 => 18,  82 => 15,  79 => 14,  77 => 13,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Registro - Directorio de Usuarios{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block body %}
\t<form action=\"index.php\" method=\"post\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<h1>Registro de Usuario</h1>
\t\t\t</div>
\t\t\t{% if (errMessage != \"\") %}
\t\t\t\t<div class=\"offset-md-4 col-4 text-center alert alert-danger\">
\t\t\t\t\t{{ errMessage }}\t
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"offset-md-4 col-4 text-center\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Nombre:</label><br />
\t\t\t\t\t<input type=\"text\" name=\"usr_name\" placeholder=\"Favor digite su nombre completo\" class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Documento:</label><br />
\t\t\t\t\t<input type=\"text\" name=\"usr_document\" placeholder=\"Favor digite su número de documento\" class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Pais:</label><br />
\t\t\t\t\t<select id=\"usr_country\" name=\"usr_country\" class=\"w-100\">
\t\t\t\t\t\t{% for country in countries %}
\t\t\t\t\t\t\t<option value=\"{{ country.country_code|trim }}\" {{ (country.country_code|trim == 'CO') ? 'selected=\"selected\"' : '' }} >
\t\t\t\t\t\t\t\t{{country.country_name}}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Correo:</label><br />
\t\t\t\t\t<input type=\"email\" name=\"usr_email\" placeholder=\"Favor digite su correo electrónico\"  class=\"w-100\" required><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>Password:</label><br />
\t\t\t\t\t<input type =\"password\" name=\"usr_password\" placeholder=\"Favor digite su contraseña\"  class=\"w-100\" required><br /><br />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type =\"hidden\" name=\"action\" value=\"register\">
\t\t\t\t\t<button type=\"submit\" class=\"btn-success\">Registrarme</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
{% endblock %}", "register.html.twig", "C:\\xampp\\htdocs\\pruebas\\prbZinobe\\templates\\views\\register.html.twig");
    }
}
