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

/* base.html.twig */
class __TwigTemplate_337fef31e7ef92251a8491514e1862eae6768946b9e68cf0eccd04a8ec6720ad extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "
    \t<div class=\"container\">

";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
        </div>

";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
\t<!-- Google Fonts -->
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
\t<!-- Bootstrap core CSS -->
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<!-- Material Design Bootstrap -->
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css\" rel=\"stylesheet\">
";
    }

    // line 17
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "      <header>
    \t    <!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">

  <!-- Navbar brand -->
  <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien_index");
        echo "\"><i class=\"fas fa-home\"></i>ACCUEIL</a>

  <!-- Collapse button -->
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#basicExampleNav\"
    aria-controls=\"basicExampleNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <!-- Collapsible content -->
  <div class=\"collapse navbar-collapse\" id=\"basicExampleNav\">

    <!-- Links -->
    <ul class=\"navbar-nav ml-auto\">
      </li>
      
      ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien_new");
            echo "\">NOUVEL ARTICLE</a>
      </li>
      ";
        }
        // line 43
        echo "
      ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "        <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\"
          aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-user\"></i>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
        <div class=\"dropdown-menu dropdown-primary\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"/profile\">Profile</a>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <a class=\"dropdown-item\" href=\"/logout\">Se déconnecter</a>
        </div>
      </li>
      ";
        } else {
            // line 55
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/login\">Connexion</a>
      </li>
      ";
        }
        // line 59
        echo "    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->

</nav>
</header>
<!--/.Navbar-->
    \t";
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<!-- Bootstrap tooltips -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
\t<!-- Bootstrap core JavaScript -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js\"></script>
\t<!-- MDB core JavaScript -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 76,  186 => 75,  180 => 71,  168 => 59,  162 => 55,  151 => 47,  147 => 45,  145 => 44,  142 => 43,  136 => 40,  133 => 39,  131 => 38,  113 => 23,  106 => 18,  102 => 17,  91 => 7,  87 => 6,  80 => 5,  74 => 85,  72 => 75,  67 => 72,  65 => 71,  60 => 68,  58 => 17,  54 => 15,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\templates\\base.html.twig");
    }
}
