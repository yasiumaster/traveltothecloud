<?php

/* AppBundle:Auth:auth.html.twig */
class __TwigTemplate_a806dcac211c9247cec65ce0f8b1a7549c2f6f358d4411bd9da5998751920534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_624123fde021d03c184b12eeb1f880c51506d43dab036fc03d370e29f3d2cd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624123fde021d03c184b12eeb1f880c51506d43dab036fc03d370e29f3d2cd33->enter($__internal_624123fde021d03c184b12eeb1f880c51506d43dab036fc03d370e29f3d2cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Auth:auth.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t</head>
\t<body>
\t\t<form class=\"sign_in_login\" onSubmit=\"return checkForm()\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_login_check");
        echo "\" method=\"post\"  autocomplete=\"off\" role=\"presentation\">
     
                <input name=\"_username\" type=\"text\" placeholder=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("e-mail", array(), "messages");
        echo "\" id=\"log\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
        echo "\" />
                <input autocomplete=\"new-password\" name=\"_password\" type=\"password\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
        echo "\" id=\"password\" />
                <button type=\"submit\" class=\"btn-login btn-effect effect3\" >";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Sign in", array(), "messages");
        echo "</button>
            </form>
\t</body>
</html>";
        
        $__internal_624123fde021d03c184b12eeb1f880c51506d43dab036fc03d370e29f3d2cd33->leave($__internal_624123fde021d03c184b12eeb1f880c51506d43dab036fc03d370e29f3d2cd33_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Auth:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  39 => 8,  33 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
\t<head>
\t</head>
\t<body>
\t\t<form class=\"sign_in_login\" onSubmit=\"return checkForm()\" action=\"{{path('app_login_check')}}\" method=\"post\"  autocomplete=\"off\" role=\"presentation\">
     
                <input name=\"_username\" type=\"text\" placeholder=\"{% trans %}e-mail{% endtrans %}\" id=\"log\" value=\"{{ idx }}\" />
                <input autocomplete=\"new-password\" name=\"_password\" type=\"password\" value=\"{{ idx }}\" id=\"password\" />
                <button type=\"submit\" class=\"btn-login btn-effect effect3\" >{% trans %}Sign in{% endtrans %}</button>
            </form>
\t</body>
</html>", "AppBundle:Auth:auth.html.twig", "C:\\xampp\\htdocs\\traveltothecloud\\web\\src\\AppBundle/Resources/views/Auth/auth.html.twig");
    }
}
