<?php

/* UP1ThesisBundle::message.html.twig */
class __TwigTemplate_99dc4fd6649b0e75fcf4e151f67cbb3ebfcb0e0cafefd192e4b9a156826762f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UP1ThesisBundle::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UP1ThesisBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h3 align=\"center\">";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</h3>

            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("nav_center");
        echo "\">
                back 
            </a>
";
    }

    public function getTemplateName()
    {
        return "UP1ThesisBundle::message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  28 => 3,);
    }
}
