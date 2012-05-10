<?php

/* AcmeUserBundle:Default:buy.html.twig */
class __TwigTemplate_f1b455bc33b8229c496f05e295b7847b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/backgroundarticle.png"), "html", null, true);
        echo "\">
    </div>
</div>
<div class=\"row article\"><div class=\"six columns offset-by-one\">
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loca"));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "loc"));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 11
                if (($this->getAttribute($this->getContext($context, "location"), "id") == $this->getContext($context, "key"))) {
                    // line 12
                    echo "
<h5>Παζάρι με: ";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "location"), "product"), "name"), "html", null, true);
                    echo "</h5>

";
                    // line 15
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sell"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                        // line 16
                        echo "
";
                        // line 17
                        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "location"), "id") == $this->getContext($context, "key"))) {
                            // line 18
                            echo "\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
                            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                                // line 19
                                echo "\t\t";
                                if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "sell"), "user"), "id"))) {
                                    // line 20
                                    echo "<table><tr><td>\t<h6>Παραγωγός:";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
                                    echo " ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "lastname"), "html", null, true);
                                    echo "</h6></td><td> <img src=\"/ef/web/images/stars.png\"></td></tr>
\t\t";
                                }
                                // line 22
                                echo "\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 23
                            echo "<tr><td><h6>Προέλευση: </td><td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "origin"), "html", null, true);
                            echo "</h6></td></tr>

<tr><td><h6>Αρχική ποσότητα: </td><td>";
                            // line 25
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "quantity"), "html", null, true);
                            echo " κιλά</h6></td></tr>
<tr><td><h6>Τιμή:</td><td> ";
                            // line 26
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "price"), "html", null, true);
                            echo " ευρώ</h6>
<tr><td><h6>Η ελάχιστη ποσότητα παραγγελιών είναι:</td><td>";
                            // line 27
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "minquantity"), "html", null, true);
                            echo "\tκιλά</h6></td></tr>

</td></tr>
 <form  action=\"";
                            // line 30
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("buy_new"), "html", null, true);
                            echo "\" method=\"post\"  class=\"nice\">
<input type=\"hidden\" name=\"id\" value=\"";
                            // line 31
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sell"), "id"), "html", null, true);
                            echo "\"/>
<tr><td><h6>Ποσότητα:</td><td><input type=\"text\" name=\"quant\" /></h6></td></tr>
<tr><td></td><td><button type=\"submit\">Αγορά</button></td></tr>
</form>
</table>
   ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 38
                    echo "   ";
                }
                // line 39
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "

</form>
</div>
</div>
";
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        // line 50
        echo "<div class=\"three colums nava\">
\t<div class=\"art-vmenublock\">
\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublock-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"art-vmenublockcontent-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"art-vmenu\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pazari\" ><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αρχική</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Προφίλ</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"price\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Τιμοκατάλογος</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"logout\"><span class=\"l\"> </span><span class=\"r\"> </span><span class=\"t\">Αποσύνδεση</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cleared\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>";
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
