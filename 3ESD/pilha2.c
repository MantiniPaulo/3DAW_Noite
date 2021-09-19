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




int main()
{
    PILHA A, B, C;
    A.topo = -1;
    B.topo = -1;
    C.topo = -1;
    PILHA *end_pilhas[] = {&A, &B, &C};
    int n;    

    coloca(&A, 3);
    coloca(&A, 2);
    coloca(&A, 1);
    estados(end_pilhas);

    n = tira(&A);
    coloca(&B, n);
    estados(end_pilhas);

    n = tira(&A);
    coloca(&B, n);
    estados(end_pilhas);

    n = tira(&A);
    coloca(&C, n);
    estados(end_pilhas);

    n = tira(&B);
    coloca(&C, n);
    estados(end_pilhas);

    n = tira(&B);
    coloca(&C, n);
    estados(end_pilhas);  


    return 0;
}