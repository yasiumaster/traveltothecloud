<?php

/* base.html.twig */
class __TwigTemplate_8e55f812843ea02b093a8fec3ad1c8ff36169ba9770126b360a9647973170d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84a4426b3843cce269d799071018f99b8fea908887aa6b7e59c630dfd4ae78a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a4426b3843cce269d799071018f99b8fea908887aa6b7e59c630dfd4ae78a0->enter($__internal_84a4426b3843cce269d799071018f99b8fea908887aa6b7e59c630dfd4ae78a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_84a4426b3843cce269d799071018f99b8fea908887aa6b7e59c630dfd4ae78a0->leave($__internal_84a4426b3843cce269d799071018f99b8fea908887aa6b7e59c630dfd4ae78a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f01d7bff6004aac619cf6fb7f6fa098745cae4ae1ad939631a083ea0fbdd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f01d7bff6004aac619cf6fb7f6fa098745cae4ae1ad939631a083ea0fbdd19->enter($__internal_d0f01d7bff6004aac619cf6fb7f6fa098745cae4ae1ad939631a083ea0fbdd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d0f01d7bff6004aac619cf6fb7f6fa098745cae4ae1ad939631a083ea0fbdd19->leave($__internal_d0f01d7bff6004aac619cf6fb7f6fa098745cae4ae1ad939631a083ea0fbdd19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_296324c210b4c680fb3b5cd3dec0f3630a23715fdea48a72a02d2a663f77abaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296324c210b4c680fb3b5cd3dec0f3630a23715fdea48a72a02d2a663f77abaa->enter($__internal_296324c210b4c680fb3b5cd3dec0f3630a23715fdea48a72a02d2a663f77abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_296324c210b4c680fb3b5cd3dec0f3630a23715fdea48a72a02d2a663f77abaa->leave($__internal_296324c210b4c680fb3b5cd3dec0f3630a23715fdea48a72a02d2a663f77abaa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16e681c03d96243fb99164c622fd48c209331e020c1195f875bcea37fe2ab42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e681c03d96243fb99164c622fd48c209331e020c1195f875bcea37fe2ab42f->enter($__internal_16e681c03d96243fb99164c622fd48c209331e020c1195f875bcea37fe2ab42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16e681c03d96243fb99164c622fd48c209331e020c1195f875bcea37fe2ab42f->leave($__internal_16e681c03d96243fb99164c622fd48c209331e020c1195f875bcea37fe2ab42f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9361b9bdddbea83c00888565e05eb60fe937d487fd7293a90ce2b00f2c026f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9361b9bdddbea83c00888565e05eb60fe937d487fd7293a90ce2b00f2c026f39->enter($__internal_9361b9bdddbea83c00888565e05eb60fe937d487fd7293a90ce2b00f2c026f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9361b9bdddbea83c00888565e05eb60fe937d487fd7293a90ce2b00f2c026f39->leave($__internal_9361b9bdddbea83c00888565e05eb60fe937d487fd7293a90ce2b00f2c026f39_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\traveltothecloud\\web\\app\\Resources\\views\\base.html.twig");
    }
}
