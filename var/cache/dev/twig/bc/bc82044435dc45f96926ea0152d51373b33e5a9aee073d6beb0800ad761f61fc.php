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
        echo "    <div id=\"page_entiere\" style=\"width:100%;\">
    
        <div id=\"page_droite\" style=\"float:right; width:75%;\">
            <div id=\"espace_titre\" data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\" data-update-page-padding =\"false\">
               <input class=\"retour\" type=\"button\" value=\"     RETOUR\" onclick=\"goBack()\">
               <h2>INSCRIVEZ-VOUS !</h2>
            </div>
            <div id=\"contenu_inscription\">
          
\t           <div id=\"formulaire_inscription\" align=\"left\" >
            
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Nom d'utilisateur"]]);
        // line 22
        echo "

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'row', ["label" => "Adresse email", "attr" => ["placeholder" => "Adresse email"]]);
        // line 29
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Adresse email"]]);
        // line 35
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'row', ["label" => "Prenom", "attr" => ["placeholder" => "Adresse email"]]);
        // line 41
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe"]]);
        // line 47
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 48, $this->source); })()), "confirm_password", [], "any", false, false, false, 48), 'row', ["label" => "Confirmer votre mot de passe", "attr" => ["placeholder" => "Confirmer votre mot de passe"]]);
        // line 53
        echo "

                
                <button type=\"submit\" class=\"btn btn-succes\"> Enregistrer</button>

                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSignup"]) || array_key_exists("formSignup", $context) ? $context["formSignup"] : (function () { throw new RuntimeError('Variable "formSignup" does not exist.', 58, $this->source); })()), 'form_end');
        echo "


\t            <a href=\"/login\"><p>Already have an account ? Click here !</p></a>
               </div>
            </div>
        </div>
    </div>
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
        return array (  121 => 58,  114 => 53,  112 => 48,  109 => 47,  107 => 42,  104 => 41,  102 => 36,  99 => 35,  97 => 30,  94 => 29,  92 => 24,  88 => 22,  86 => 17,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"page_entiere\" style=\"width:100%;\">
    
        <div id=\"page_droite\" style=\"float:right; width:75%;\">
            <div id=\"espace_titre\" data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\" data-update-page-padding =\"false\">
               <input class=\"retour\" type=\"button\" value=\"     RETOUR\" onclick=\"goBack()\">
               <h2>INSCRIVEZ-VOUS !</h2>
            </div>
            <div id=\"contenu_inscription\">
          
\t           <div id=\"formulaire_inscription\" align=\"left\" >
            
                {{ form_start(formSignup) }}

                {{form_row (formSignup.username, {
                'label': 'Nom d\\'utilisateur',
                'attr':{
                    'placeholder' : 'Nom d\\'utilisateur' 
                    }
                })}}

                {{form_row (formSignup.email, {
                    'label': 'Adresse email',
                    'attr':{
                        'placeholder' : 'Adresse email' 
                        }
                    })}}
                {{form_row (formSignup.nom, {
                    'label': 'Nom',
                    'attr':{
                        'placeholder' : 'Adresse email' 
                        }
                    })}}
                {{form_row (formSignup.prenom, {
                    'label': 'Prenom',
                    'attr':{
                        'placeholder' : 'Adresse email' 
                        }
                    })}}
                {{form_row(formSignup.password, {
                    'label': 'Mot de passe',
                    'attr':{
                        'placeholder' : 'Mot de passe' 
                        }
                    })}}
                {{form_row(formSignup.confirm_password, {
                    'label': 'Confirmer votre mot de passe',
                    'attr':{
                        'placeholder' : 'Confirmer votre mot de passe' 
                        }
                    })}}

                
                <button type=\"submit\" class=\"btn btn-succes\"> Enregistrer</button>

                {{form_end(formSignup)}}


\t            <a href=\"/login\"><p>Already have an account ? Click here !</p></a>
               </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/signup.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\Moodle\\templates\\security\\signup.html.twig");
    }
}
