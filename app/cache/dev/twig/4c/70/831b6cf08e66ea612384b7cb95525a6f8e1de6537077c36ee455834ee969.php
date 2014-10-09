<?php

/* UP1ThesisBundle:Default:index.html.twig */
class __TwigTemplate_4c70831b6cf08e66ea612384b7cb95525a6f8e1de6537077c36ee455834ee969 extends Twig_Template
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
        if ((!(null === (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))))) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    
    <form role=\"form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("connection");
        echo "\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\" class=\"col-sm-2 control-label\">Login</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\" name=\"login\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=\"password\">
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "UP1ThesisBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
