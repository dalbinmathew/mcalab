#include <stdio.h>
#include <stdlib.h>

struct node {
    int data;
    struct node* left;
    struct node* right;
};

struct node* root = NULL;

struct node* createNode(int data) {
    struct node* newNode = (struct node*)malloc(sizeof(struct node));
    newNode->data = data;
    newNode->left = NULL;
    newNode->right = NULL;
    return newNode;
}

void insert(int data) {
    struct node* newNode = createNode(data);
    if (root == NULL) {
        root = newNode;
        return;
    }
    struct node* current = root;
    struct node* parent = NULL;
    while (1) {
        parent = current;
        if (data < current->data) {
            current = current->left;
            if (current == NULL) {
                parent->left = newNode;
                return;
            }
        }
        else {
            current = current->right;
            if (current == NULL) {
                parent->right = newNode;
                return;
            }
        }
    }
}

void inorderTraversal(struct node* node) {
    if (node == NULL) {
        return;
    }
    inorderTraversal(node->left);
    printf("%d ", node->data);
    inorderTraversal(node->right);
}

int main() {
    int num, data;
    printf("Enter how many nodes you want to insert? ");
    scanf("%d", &num);
    for (int i = 1; i <= num; i++) {
        printf("Enter data: ");
        scanf("%d", &data);
        insert(data);
    }
    printf("Binary Search Tree: ");
    inorderTraversal(root);
    return 0;
}

