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

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_0d2ad6f867a63e8f2ec855376746e64dd346594de54f75b21ee84305f129fade extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modification compte";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
    <p class=\"h4 text-center py-4\">Modification de compte</p>

      <!-- Material input text -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), 'widget');
        echo "
        <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Nom d'utilisateur</label>
      </div>

      <!-- Material input email -->
      <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix blue-text\"></i>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre email</label>
      </div>
      <!-- Material input nom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre nom</label>
      </div>
      <!-- Material input prenom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Prénom</label>
      </div>
      <!-- Material input adresse -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Adresse</label>
      </div>
      <!-- Material input code postal -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "codepostal", [], "any", false, false, false, 43), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Code postal</label>
      </div>
      <!-- Material input ville -->
      <div class=\"md-form\">
        <i class=\"fas fa-city prefix blue-text\"></i>>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "ville", [], "any", false, false, false, 49), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Ville</label>
      </div>
      <!-- Material input phone -->
      <div class=\"md-form\">
        <i class=\"fa fa-phone prefix blue-text\"></i>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "telephone", [], "any", false, false, false, 55), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Téléphone</label>
      </div>

      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "current_password", [], "any", false, false, false, 62), 'widget');
        echo "
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
      </div>     

      <div class=\"text-center py-4 mt-3\">
        <input type=\"submit\" class=\"btn\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 69,  179 => 67,  171 => 62,  161 => 55,  152 => 49,  143 => 43,  134 => 37,  125 => 31,  116 => 25,  107 => 19,  97 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block title %}Modification compte{% endblock %}

{% block body %}
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    <p class=\"h4 text-center py-4\">Modification de compte</p>

      <!-- Material input text -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        {{form_widget(form.username)}}
        <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Nom d'utilisateur</label>
      </div>

      <!-- Material input email -->
      <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix blue-text\"></i>
        {{form_widget(form.email)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre email</label>
      </div>
      <!-- Material input nom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        {{form_widget(form.nom)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre nom</label>
      </div>
      <!-- Material input prenom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        {{form_widget(form.prenom)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Prénom</label>
      </div>
      <!-- Material input adresse -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        {{form_widget(form.adresse)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Adresse</label>
      </div>
      <!-- Material input code postal -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        {{form_widget(form.codepostal)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Code postal</label>
      </div>
      <!-- Material input ville -->
      <div class=\"md-form\">
        <i class=\"fas fa-city prefix blue-text\"></i>>
        {{form_widget(form.ville)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Ville</label>
      </div>
      <!-- Material input phone -->
      <div class=\"md-form\">
        <i class=\"fa fa-phone prefix blue-text\"></i>
        {{form_widget(form.telephone)}}
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Téléphone</label>
      </div>

      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        {{ form_widget(form.current_password) }}
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
      </div>     

      <div class=\"text-center py-4 mt-3\">
        <input type=\"submit\" class=\"btn\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
{% endblock %}", "@FOSUser/Profile/edit_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
