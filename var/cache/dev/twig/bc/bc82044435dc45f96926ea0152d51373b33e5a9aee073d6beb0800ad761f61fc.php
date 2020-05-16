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

/* security/signup.html.twig */
class __TwigTemplate_8ae41146a4da213659a6a6c070a4284747af28cde445fddae16e1997961ad62f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/signup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-header header-filter\" style=\"background-image: url('/material-kit-master/assets/img/inscription.jpg'); background-size: cover; background-position: top center;\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 ml-auto mr-auto\">
\t\t\t\t<div class=\"card card-login\">
\t\t\t\t\t\t<div class=\"card-header card-header-primary text-center\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Inscription</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), 'row', ["attr" => ["type" => "text", "class" => "form-controle", "placeholder" => "Nom d'utilisateur"]]);
        // line 26
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
                                        <br>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'row', ["attr" => ["type" => "text", "class" => "form-controle", "placeholder" => "Email"]]);
        // line 41
        echo "


\t\t\t\t\t\t\t</div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'row', ["attr" => ["type" => "text", "class" => "form-controle", "placeholder" => "Nom"]]);
        // line 55
        echo "

\t\t\t\t\t\t\t</div>

                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 63, $this->source); })()), "prenom", [], "any", false, false, false, 63), 'row', ["attr" => ["type" => "text", "class" => "form-controle", "placeholder" => "Prenom"]]);
        // line 69
        echo "

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 76, $this->source); })()), "password", [], "any", false, false, false, 76), 'row', ["attr" => ["class" => "form-controle", "placeholder" => "password"]]);
        // line 81
        echo "

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 88, $this->source); })()), "confirm_password", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-controle", "placeholder" => "confirm password"]]);
        // line 93
        echo "

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 100, $this->source); })()), "isProf", [], "any", false, false, false, 100), 'row', ["label" => "Etes vous un prof", "attr" => ["class" => "form-controle", "placeholder" => "confirm password"]]);
        // line 106
        echo "

                            </div>
\t\t\t\t\t\t<div class=\"footer text-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-succes\">
                                    Connexion
                            </button>
\t\t\t\t\t\t</div>
";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 114, $this->source); })()), 'form_end');
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 114,  161 => 106,  159 => 100,  150 => 93,  148 => 88,  139 => 81,  137 => 76,  128 => 69,  126 => 63,  116 => 55,  114 => 49,  104 => 41,  102 => 35,  91 => 26,  89 => 20,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"page-header header-filter\" style=\"background-image: url('/material-kit-master/assets/img/inscription.jpg'); background-size: cover; background-position: top center;\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 ml-auto mr-auto\">
\t\t\t\t<div class=\"card card-login\">
\t\t\t\t\t\t<div class=\"card-header card-header-primary text-center\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Inscription</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
{{ form_start(formSignup) }}
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                {{form_row (formSignup.username, {
                                                'attr':{
                                                    'type' : \"text\",
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'Nom d\\'utilisateur' 
                                                    }
                                                })}}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
                                        <br>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                    {{form_row (formSignup.email, {
                                                'attr':{
                                                    'type' : \"text\",
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'Email' 
                                                    }
                                                })}}


\t\t\t\t\t\t\t</div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                {{form_row (formSignup.nom, {
                                                'attr':{
                                                    'type' : \"text\",
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'Nom' 
                                                    }
                                                })}}

\t\t\t\t\t\t\t</div>

                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                {{form_row (formSignup.prenom, {
                                                'attr':{
                                                    'type' : \"text\",
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'Prenom' 
                                                    }
                                                })}}

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                {{form_row (formSignup.password, {
                                                'attr':{
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'password' 
                                                    }
                                                })}}

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                                {{form_row (formSignup.confirm_password, {
                                                'attr':{
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'confirm password' 
                                                    }
                                                })}}

                            </div>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"></span>
                                </div>
                            {{form_row (formSignup.isProf, {
                                'label': 'Etes vous un prof',
                                                'attr':{
                                                    'class' : \"form-controle\",
                                                    'placeholder' : 'confirm password' 
                                                    }
                                                })}}

                            </div>
\t\t\t\t\t\t<div class=\"footer text-center\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-succes\">
                                    Connexion
                            </button>
\t\t\t\t\t\t</div>
{{ form_end(formSignup) }}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



{% endblock %}
", "security/signup.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\newMoodle\\moodle\\templates\\security\\signup.html.twig");
    }
}
