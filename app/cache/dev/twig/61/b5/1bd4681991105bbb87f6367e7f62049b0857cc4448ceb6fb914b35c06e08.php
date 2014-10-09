<?php

/* UP1ThesisBundle:Default:nav.html.twig */
class __TwigTemplate_61b51bd4681991105bbb87f6367e7f62049b0857cc4448ceb6fb914b35c06e08 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-body\">
      <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("event");
        echo "\">All events</a>
  </div>
</div>
<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("my_events");
        echo "\">My events</a>
  </div>
</div>
<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("subscriptions");
        echo "\">Subscriptions</a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UP1ThesisBundle:Default:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
