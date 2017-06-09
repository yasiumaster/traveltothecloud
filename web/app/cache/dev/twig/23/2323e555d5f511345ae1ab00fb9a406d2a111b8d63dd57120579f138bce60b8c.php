<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab33d90a79c260bcd7db3e2fd6b945ce1373a0c2b949312725d6191700c65e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d10202f1f16ff162d31a9feac030b1dbb61b61f0ce58ee9abccd202d79d5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d10202f1f16ff162d31a9feac030b1dbb61b61f0ce58ee9abccd202d79d5e7->enter($__internal_e2d10202f1f16ff162d31a9feac030b1dbb61b61f0ce58ee9abccd202d79d5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d10202f1f16ff162d31a9feac030b1dbb61b61f0ce58ee9abccd202d79d5e7->leave($__internal_e2d10202f1f16ff162d31a9feac030b1dbb61b61f0ce58ee9abccd202d79d5e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1878da041171214a50ed315ae2d7c53601699de05cb879bd67a8a996d37ab166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1878da041171214a50ed315ae2d7c53601699de05cb879bd67a8a996d37ab166->enter($__internal_1878da041171214a50ed315ae2d7c53601699de05cb879bd67a8a996d37ab166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1878da041171214a50ed315ae2d7c53601699de05cb879bd67a8a996d37ab166->leave($__internal_1878da041171214a50ed315ae2d7c53601699de05cb879bd67a8a996d37ab166_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6040a8e68e3d1c6b74c412269939c176623bac2a83665b7ce637867ae268e83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6040a8e68e3d1c6b74c412269939c176623bac2a83665b7ce637867ae268e83f->enter($__internal_6040a8e68e3d1c6b74c412269939c176623bac2a83665b7ce637867ae268e83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6040a8e68e3d1c6b74c412269939c176623bac2a83665b7ce637867ae268e83f->leave($__internal_6040a8e68e3d1c6b74c412269939c176623bac2a83665b7ce637867ae268e83f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b50eacfd7a3b189a52546a9bb4d1253c94ba150b2ab234b74bcedc2dfcbecf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b50eacfd7a3b189a52546a9bb4d1253c94ba150b2ab234b74bcedc2dfcbecf9->enter($__internal_8b50eacfd7a3b189a52546a9bb4d1253c94ba150b2ab234b74bcedc2dfcbecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b50eacfd7a3b189a52546a9bb4d1253c94ba150b2ab234b74bcedc2dfcbecf9->leave($__internal_8b50eacfd7a3b189a52546a9bb4d1253c94ba150b2ab234b74bcedc2dfcbecf9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\traveltothecloud\\web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
