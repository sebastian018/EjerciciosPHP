<html>
<head>
    <title>Ecuaciones de 2° Grado</title>
</head>
<script language =javascript>
    <!--
    function ResolverEc()
    {
        var Ea= parseInt(document.forms[0].Ea.value);
        var Eb= parseInt(document.forms[0].Eb.value);
        var Ec= parseInt(document.forms[0].Ec.value);
        var E1= new Ec2gdo(Ea,Eb,Ec);
        E1.Resolver(E1);
        delete E1;
        document.close();
    }
    function Ec2gdo(A,B,C)
    {
        this.a=A;
        this.b=B;
        this.c=C;
        this.est=0;
        this.x1=new Complejo();
        this.x2=new Complejo();
        this.Resolver=ResolverEc2gdo;
        this.ResolverReal=Real;
        this.ResolverImaginario=Imaginario;
        this.AsString=AsString;
    }
    function ResolverEc2gdo()
    {
        var d=(this.b*this.b)-(4*this.a*this.c);
        if(d>=0)
        {
            this.ResolverReal(d);
            //this.AsString();
        }
        else
        {
            this.ResolverImaginario(d);
        }
    }
    function Real(D)
    {
        var d=D;
        var r=Math.sqrt(d);
        this.x1.R=((this.b*-1)+r)/(2*this.a);
        this.x2.R=((this.b*-1)-r)/(2*this.a);
        this.est=0;
        this.AsString();
    }
    function Imaginario(D)
    {
        var d=D;
        d*=-1;
        this.x1.R=(this.b*-1)/(2*this.a);
        this.x1.I=Math.sqrt(d)/(2*this.a);
        this.x2.R=this.x1.R;
        this.x2.I=this.x1.I;
        this.est=1;
        this.AsString();
    }
    function  AsString(res)
    {
        //var estado=est;
        if(this.est==0)
        {
            alert('x1= '+this.x1.R+'\n'+'x2= '+this.x2.R);
        }
        else
        {
            alert('x1= '+ this.x1.R+' + '+this.x1.I+' i'+'\n'+'x2= '+this.x2.R+' - '+this.x2.I+' i')
        }
        delete x1;
        delete x2;
    }

    function Complejo(R,I)
    {
        this.R=(R || 0);
        this.I=(I || 0);
        //this.Sumar=SumarComplejo;
        //this.Restar=RestarComplejo;
        //this.Multiplicar=MultiplicarComplejo;
        //this.Dividir=DividirComplejo;
    }

    -->
</script>
<body bgcolor="#000000" link="#0000FF" vlink="#FF00FF">
<center><form><font color="#FFFFFF"><b>
                Ecuación1  <input type="text" name="Ea" size="2">  x<sup>2</sup>
                + <input type="text" name="Eb" size="2">  x
                + <input type="text" name="Ec" size="2"> =  0</b></font>
        <br><br><input type="button" value="Resolver" onClick="ResolverEc()"><br><br>
        <input type="reset"><br><br><br><br><br></form>
    <marquee  bgcolor="#000000" direction="left" width="300">
        <font color="#258D7D" face="Berlin Sans FB"><b>Ecuaciones 2° Grado</b></font>
    </marquee></center><br><br><br>
</body>
</html>