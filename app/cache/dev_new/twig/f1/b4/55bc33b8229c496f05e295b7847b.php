<?php

/* AcmeUserBundle:Default:buy.html.twig */
class __TwigTemplate_f1b455bc33b8229c496f05e295b7847b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"/images/backgroundarticle.png\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">
<h3> Συναντήσεις </h3>
</div>
</div>
<div class=\"row article\">
    <div class=\"six columns offset-by-one form\">


<div class=\"fos_user_agora\">
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loca"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 22
                if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getContext($context, "key"))) {
                    // line 23
                    echo "
Παζάρι με:";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "name"), "html", null, true);
                    echo "

";
                    // line 26
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                        // line 27
                        echo "
";
                        // line 28
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id") == $this->getContext($context, "key"))) {
                            // line 29
                            echo "\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
                            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                                // line 30
                                echo "\t\t";
                                if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id"))) {
                                    // line 31
                                    echo "\t<h6>Το όνομα του παραγωγού είναι:\t";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
                                    echo "</h6>
\t\t";
                                }
                                // line 33
                                echo "\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 34
                            echo "<h6>Η αρχική διαθέσιμη ποσότητα είναι:";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
                            echo "</h6>
<h6>Η τιμή είναι:";
                            // line 35
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "price"), "html", null, true);
                            echo "</h6>
<h6>Η προέλευση είναι: ";
                            // line 36
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "origin"), "html", null, true);
                            echo "</h6>
<h6>Η ελάχιστη ποσότητα παραγγελιών είναι: ";
                            // line 37
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "minquantity"), "html", null, true);
                            echo "\t</h6>
 <form  action=\"";
                            // line 38
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy_new"), "html", null, true);
                            echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                            // line 39
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "id"), "html", null, true);
                            echo "\"/>
<input type=\"text\" name=\"quant\" />
<button type=\"submit\">Αγορά</button>
</form>
   ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 45
                    echo "   ";
                }
                // line 46
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 48
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "
</div>
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
