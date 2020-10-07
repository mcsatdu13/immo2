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

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_e1b79c9e820f6986b3d08614118daceca31f63f71e3bd37ca024e6c9494fe2d3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification compte";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit"), "attr" => ["class" => "fos_user_profile_edit"]]);
        echo "
    <p class=\"h4 text-center py-4\">Modification de compte</p>

      <!-- Material input text -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 12), 'widget');
        echo "
        <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Nom d'utilisateur</label>
      </div>

      <!-- Material input email -->
      <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix blue-text\"></i>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre email</label>
      </div>
      <!-- Material input nom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 25), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre nom</label>
      </div>
      <!-- Material input prenom -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 31), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Prénom</label>
      </div>
      <!-- Material input adresse -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 37), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Adresse</label>
      </div>
      <!-- Material input code postal -->
      <div class=\"md-form\">
        <i class=\"fas fa-map-marker-alt prefix blue-text\"></i>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codepostal", [], "any", false, false, false, 43), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Code postal</label>
      </div>
      <!-- Material input ville -->
      <div class=\"md-form\">
        <i class=\"fas fa-city prefix blue-text\"></i>>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 49), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Ville</label>
      </div>
      <!-- Material input phone -->
      <div class=\"md-form\">
        <i class=\"fa fa-phone prefix blue-text\"></i>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 55), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Téléphone</label>
      </div>

      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", [], "any", false, false, false, 62), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  149 => 67,  141 => 62,  131 => 55,  122 => 49,  113 => 43,  104 => 37,  95 => 31,  86 => 25,  77 => 19,  67 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Profile:edit_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
