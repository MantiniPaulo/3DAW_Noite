#include <stdio.h>
#include <string.h>
#include <stdio.h>

#define MAXSIZE 3

struct pilha
{
    int corpo[MAXSIZE];
    int topo;
};
typedef struct pilha PILHA;

void estados(PILHA **end_end_pilhas)
{
    printf("A\tB\tC\n");
    int i;
    int ip;
    
    for (i = MAXSIZE - 1; i >= 0; i--)
    {
        for (ip = 0; ip < 3; ip++)
        {
            PILHA **end_end_pilha = &end_end_pilhas[ip];
            PILHA p = **end_end_pilha;
            if (i <= p.topo)
            {
                printf("%d\t", p.corpo[i]);
            }
            else
            {
                printf("-\t");
            }
        }
        printf("\n");
    }
    printf("\n");
}

void coloca(PILHA *p, int n)
{
    if (p->topo == (MAXSIZE - 1))
    {
        printf("Pilha cheia\n");
        return;
    }
    else
    {
        p->topo++;
        p->corpo[p->topo] = n;
    }
    return;
}

int tira(PILHA *p)
{
    int n = 0;
    if (p->topo < 0)
    {
        printf("Pilha vazia\n");
    }
    else
    {
        n = p->corpo[p->topo];
        p->topo--;
    }
    return (n);
}

void implementacao(PILHA *o,PILHA *d, int n)
{
    n = tira(&o);
    coloca(&d, n);
    estados(end_pilhas);    
}


int main()
{
    PILHA A, B, C;
    A.topo = -1;
    B.topo = -1;
    C.topo = -1;
    PILHA *end_pilhas[] = {&A, &B, &C};
    int n;
    char sair[2] = "s";
    char pilha[2], pilha1[2];
    char a[2] = "A", b[2] = "B", c[2] = "C";

    printf("\tTorre de HANOI\n");

    printf("\tOs discos tem de ser passados, da pilha A para a pilha C, utilizando a pilha B.\n");
    printf("\tRegras:\n");
    printf("\t\tUm disco maior não pode ficar sobre um disco menor\n");
    printf("\t\tSó pode mexer em um disco em cada movimento.\n");

    coloca(&A, 3);
    coloca(&A, 2);
    coloca(&A, 1);
    estados(end_pilhas);

    while (n !=0)
    {
        printf("\tDigite 1, 2 e 3 para os respectivos numeros na pilha\n");
        printf("\tDigite s para sair");
        
        printf("Para pilha deseja tirar? A - B - C");
        fflush(stdin);
        gets(pilha);  
        
        if((strcmp(sair,pilha)) != 0)
        {
            if((strcmp(pilha,a)) != 0)
            {
                printf("Para qual pilha deseja colocar? B - C");
                fflush(stdin);
                gets(pilha1);
                if((strcmp(pilha,b)) != 0)
                {
                    printf("Qual numero?");
                    scanf("%d", n);
                    implementacao(&A,&B,n);
                }
                else
                {
                    printf("Qual numero?");
                    scanf("%d", n);
                    implementacao(&A,&C,n);
                }
            }
            else 
            {
                if((strcmp(pilha,b)) != 0)
                {
                    printf("Para qual pilha deseja colocar? A - C");
                    fflush(stdin);
                    gets(pilha1);
                    if((strcmp(pilha,c)) != 0)
                    {
                        printf("Qual numero?");
                        scanf("%d", n);
                        implementacao(&B,&C,n);
                    }
                    else
                        {
                            printf("Qual numero?");
                            scanf("%d", n);
                            implementacao(&B,&A,n);
                        }
                }
                else
                {
                    if((strcmp(pilha,c)) != 0)
                    {
                        printf("Para qual pilha deseja colocar? A - B");
                        fflush(stdin);
                        gets(pilha1);
                        if((strcmp(pilha,a)) != 0)
                        {
                            printf("Qual numero?");
                            scanf("%d", n);
                            implementacao(&C,&A,n);
                        }
                        else
                        {
                            printf("Qual numero?");
                            scanf("%d", n);
                            implementacao(&C,&B,n);
                        }
                    }
                }
            }        
          

        }
        else{
            printf("\tFim do Jogo\n");
        }   
    }

    return 0;
}