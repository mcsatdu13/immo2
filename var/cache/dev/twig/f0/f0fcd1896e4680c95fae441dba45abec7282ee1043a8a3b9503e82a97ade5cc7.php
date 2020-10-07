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

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_14ee746a50a76eee7e5ee4c486c71493eba433acd28822126eec9844336827a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nouveau compte";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Card -->
<div class=\"card mt-5\">

  <!-- Card body -->
  <div class=\"card-body\">
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"], "class" => "border border-light p-5"]);
        echo "
<p class=\"h4 text-center py-4\">Créer un compte</p>

      <!-- Material input text -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), 'widget');
        echo "
        <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Nom d'utilisateur</label>
      </div>

      <!-- Material input email -->
      <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix blue-text\"></i>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre email</label>
      </div>

       <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33), 'widget');
        echo "
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'help');
        echo "
        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
      </div>
      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget');
        echo "
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
      </div>
     

      <div class=\"text-center py-4 mt-3\">
            <button class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"> Valider </button>
    </div>   
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

  </div>
  <!-- Card body -->

</div>
<!-- Card -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  147 => 47,  138 => 41,  129 => 35,  124 => 33,  114 => 26,  104 => 19,  95 => 13,  88 => 8,  78 => 7,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}

{% block title %}Nouveau compte{% endblock %}

{% block body %}
<!-- Card -->
<div class=\"card mt-5\">

  <!-- Card body -->
  <div class=\"card-body\">
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}, 'class': 'border border-light p-5'}) }}
<p class=\"h4 text-center py-4\">Créer un compte</p>

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

       <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        {{ form_widget(form.plainPassword.first) }}
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
        {{ form_help(form.plainPassword) }}
        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
      </div>
      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        {{ form_widget(form.plainPassword.second) }}
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
      </div>
     

      <div class=\"text-center py-4 mt-3\">
            <button class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\"> Valider </button>
    </div>   
{{ form_end(form) }}

  </div>
  <!-- Card body -->

</div>
<!-- Card -->
{%  endblock %}", "FOSUserBundle:Registration:register_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
