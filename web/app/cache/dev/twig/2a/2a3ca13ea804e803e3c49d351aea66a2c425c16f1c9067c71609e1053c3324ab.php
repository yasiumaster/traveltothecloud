<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_42baf7bd313fe682aad31c00c3dabae6ab05db35e61607fd5c0f3f74ed22ad56 extends Twig_Template
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
        $__internal_516f324983c9de05a854c6b6706ea3d2deb6041569a40a9e1abb010f2f0c1921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516f324983c9de05a854c6b6706ea3d2deb6041569a40a9e1abb010f2f0c1921->enter($__internal_516f324983c9de05a854c6b6706ea3d2deb6041569a40a9e1abb010f2f0c1921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516f324983c9de05a854c6b6706ea3d2deb6041569a40a9e1abb010f2f0c1921->leave($__internal_516f324983c9de05a854c6b6706ea3d2deb6041569a40a9e1abb010f2f0c1921_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41083466a6740855ebd7910b35fd490cc0801d5b5b18e6b33abc9c3d6ac33176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41083466a6740855ebd7910b35fd490cc0801d5b5b18e6b33abc9c3d6ac33176->enter($__internal_41083466a6740855ebd7910b35fd490cc0801d5b5b18e6b33abc9c3d6ac33176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41083466a6740855ebd7910b35fd490cc0801d5b5b18e6b33abc9c3d6ac33176->leave($__internal_41083466a6740855ebd7910b35fd490cc0801d5b5b18e6b33abc9c3d6ac33176_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9919ef5e2c0edcb9d4b964082ba9e8ce54b4b72d31fc1fc103612d06f3182918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9919ef5e2c0edcb9d4b964082ba9e8ce54b4b72d31fc1fc103612d06f3182918->enter($__internal_9919ef5e2c0edcb9d4b964082ba9e8ce54b4b72d31fc1fc103612d06f3182918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9919ef5e2c0edcb9d4b964082ba9e8ce54b4b72d31fc1fc103612d06f3182918->leave($__internal_9919ef5e2c0edcb9d4b964082ba9e8ce54b4b72d31fc1fc103612d06f3182918_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fed35731ef6cb51dbf62f5d95f088a9bd12764590c14bf1ba0d1e36dd2802126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed35731ef6cb51dbf62f5d95f088a9bd12764590c14bf1ba0d1e36dd2802126->enter($__internal_fed35731ef6cb51dbf62f5d95f088a9bd12764590c14bf1ba0d1e36dd2802126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fed35731ef6cb51dbf62f5d95f088a9bd12764590c14bf1ba0d1e36dd2802126->leave($__internal_fed35731ef6cb51dbf62f5d95f088a9bd12764590c14bf1ba0d1e36dd2802126_prof);

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
